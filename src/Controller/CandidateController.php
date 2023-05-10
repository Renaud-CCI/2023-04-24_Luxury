<?php

namespace App\Controller;

use App\Entity\Candidate;
use App\Entity\User;
use App\Entity\JobCategory;
use App\Form\CandidateType;
use App\Repository\CandidateRepository;
use App\Repository\JobCategoryRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Annotation\UploadedFile;

#[Route('/candidate')]
class CandidateController extends AbstractController
{

    #[Route('/', name: 'app_candidate_index', methods: ['GET'])]
    public function index(CandidateRepository $candidateRepository): Response
    {
        return $this->render('candidate/index.html.twig', [
            'candidates' => $candidateRepository->findBy([], ['created_at' => 'DESC']),
        ]);
    }

    #[Route('/new/{id}', name: 'app_candidate_new', methods: ['GET', 'POST'])]
    public function new(User $user, Request $request, CandidateRepository $candidateRepository, EntityManagerInterface $entityManager, JobCategoryRepository $jobCategoryRepository): Response
    {
        //Get All job_category
        $jobCategories = $entityManager->getRepository(JobCategory::class)->findAll();

        // Get the existing candidate for the user, if it exists
        $candidate = $candidateRepository->findOneBy(['user' => $user]);

        // If the candidate doesn't exist, create a new one
        if (!$candidate) {
            $candidate = new Candidate();
        }

        if (!$candidate->getCreatedAt()) {
            $candidate->setCreatedAt(new \DateTimeImmutable(date('Y-m-d H:i:s')));
        }

        $candidate->setUser($user);

        if ($request->files) {
            $passportFile = $request->files->get('passport');
            $cvFile = $request->files->get('cv');
            $photoFile = $request->files->get('photo');
            
            if ($photoFile) {
                $newPhotoFile = sprintf('user_%d_photo.%s', $user->getId(), $photoFile->guessExtension());
                $destinationPath = '../public/assets/img/photo/' . $newPhotoFile; 

                try {
                    $photoFile->move($destinationPath, $newPhotoFile);
                    $candidate->setProfilePicture($newPhotoFile);
                    // dd($candidate);
                } catch (FileException $e) {
                    echo $e->getMessage();
                }

            }
            
            if ($cvFile) {
                $newCvFile = sprintf('user_%d_cv.%s', $user->getId(), $cvFile->guessExtension());
                $destinationPath = '../public/assets/img/cv/' . $newCvFile; 

                try {
                    $cvFile->move($destinationPath, $newCvFile);
                    $candidate->setCv($newCvFile);
                } catch (FileException $e) {
                    echo $e->getMessage();
                }
            }
            
            if ($passportFile) {
                $newPassportFile = sprintf('user_%d_passport.%s', $user->getId(), $passportFile->guessExtension());
                $destinationPath = '../public/assets/img/passport/' . $newPassportFile; 

                try {
                    $passportFile->move($destinationPath, $newPassportFile);
                    $candidate->setPassportFile($newPassportFile);
                    $candidate->setPassport(true);
                } catch (FileException $e) {
                    echo $e->getMessage();
                }
            }
        }

        // dd($request->files, $candidate);


        if ($request->request->count() > 0) {
            $candidate->setFirstname($request->request->get('first_name'));
            $candidate->setLastname($request->request->get('last_name'));
            $candidate->setGender($request->request->get('gender'));
            $candidate->setCurrentLocation($request->request->get('current_location'));
            $candidate->setAddress($request->request->get('address'));
            $candidate->setCountry($request->request->get('country'));
            $candidate->setNationality($request->request->get('nationality'));
            $candidate->setBirthLocation($request->request->get('birth_place'));
            $candidate->setShortDescription($request->request->get('description'));
            $candidate->setExperience($request->request->get('experience'));
            $candidate->setAvailability($request->request->get('availability'));
            $candidate->setjobCategoryId($jobCategoryRepository->findOneBy(['id' => $request->request->get('job_sector')]));
            $candidate->setUpdatedAt(new \DateTimeImmutable(date('Y-m-d H:i:s')));
            $dateString = $request->request->get('birth_date');
            if ($dateString) {
                $birthdate = new \DateTimeImmutable($dateString);
                $candidate->setBirthdate($birthdate);
            }
        }

        // dd($candidate);

        $entityManager->persist($candidate);
        $entityManager->flush();


        // Counting the number of columns in the Candidates table
        $metadata = $entityManager->getClassMetadata(Candidate::class);
        $columnCount = count($metadata->getColumnNames());

        // Counting the number of currently filled columns
        $reflectionClass = new \ReflectionClass($candidate);
        $nonNullCount = 0;
        foreach ($reflectionClass->getProperties() as $property) {
            $property->setAccessible(true);
            if ($property->getValue($candidate) !== null && $property->getValue($candidate) !== '') {
                $nonNullCount++;
            }
        }

        // Calculating the percent of fullfill
        $percentage = ($nonNullCount / $columnCount) * 100;


        return $this->render('candidate/new.html.twig', [
            'candidate' => $candidate,
            'job_categories' => $jobCategories,
            'percentage' => $percentage,
        ]);
    }

    #[Route('/show/{id}', name: 'app_candidate_show', methods: ['GET'])]
    public function show(User $user, CandidateRepository $candidateRepository): Response
    {
        $candidate = $candidateRepository->findOneBy(['user' => $user]);

        return $this->render('candidate/show.html.twig', [
            'candidate' => $candidate,
        ]);
    }

    #[Route('/edit/{id}', name: 'app_candidate_edit', methods: ['GET', 'POST'])]
    public function edit(Candidate $candidate, Request $request, CandidateRepository $candidateRepository): Response
    {
        $form = $this->createForm(CandidateType::class, $candidate);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $candidateRepository->save($candidate, true);

            return $this->redirectToRoute('app_candidate_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('candidate/edit.html.twig', [
            'candidate' => $candidate,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_candidate_delete', methods: ['POST'])]
    public function delete(Request $request, Candidate $candidate, CandidateRepository $candidateRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$candidate->getId(), $request->request->get('_token'))) {
            $candidateRepository->remove($candidate, true);
        }

        return $this->redirectToRoute('app_candidate_index', [], Response::HTTP_SEE_OTHER);
    }
}
