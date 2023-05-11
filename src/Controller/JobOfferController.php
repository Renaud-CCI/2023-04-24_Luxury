<?php

namespace App\Controller;

use App\Entity\JobOffer;
use App\Entity\Application;
use App\Form\JobOfferType;
use App\Form\EntityType;
use App\Repository\JobOfferRepository;
use App\Repository\JobCategoryRepository;
use App\Repository\ClientRepository;
use App\Repository\ApplicationRepository;
use App\Repository\CandidateRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManager;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

#[Route('/job/offer')]
class JobOfferController extends AbstractController
{
	// private JobOffer $jobOffer;
	// private JobOfferRepository $jobOfferRepository;
	// private Request $request;

    // public function __construct(JobOffer $jobOffer, JobOfferRepository $jobOfferRepository, Request $request) {
    //     $this->jobOffer = $jobOffer;
    //     $this->jobOfferRepository = $jobOfferRepository;
    //     $this->request = $request;
    // }

    #[Route('/', name: 'app_job_offer_index', methods: ['GET'])]
    public function index(JobOfferRepository $jobOfferRepository): Response
    {

        return $this->render('job_offer/index.html.twig', [
            'job_offers' => $jobOfferRepository->findBy([], ['creation_date' => 'DESC']),
        ]);
    }

    #[Route('/edit/{id<\d+>?}', name: 'app_job_offer_edit', methods: ['GET', 'POST'])]
    public function edit(?int $id, JobOfferRepository $jobOfferRepository, Request $request, JobCategoryRepository $jobCategoryRepository, EntityManagerInterface $entityManager, ClientRepository $clientRepository): Response
    {
        if ($id !== null) {
            $jobOffer = $jobOfferRepository->findOneBy(['id' => $id]);
        } else {
			$jobOffer = new JobOffer();
            $jobOffer->setCreationDate(new \DateTimeImmutable(date('Y-m-d H:i:s')));
		}
     
  
        //Get All
        $jobCategories = $jobCategoryRepository->findAll();
        $clients = $clientRepository->findAll();

        $data = $request->request->all();

        if (count($data) > 0) {
            $jobOffer->setClient($clientRepository->findOneBy(['id' => $data['client_id']]))
					->setJobCategory($jobCategoryRepository->findOneBy(['id' => $data['job_category_id']]))
					->setDescription($data['description'])
					->setActivity($data['activity'])
					->setNotes($data['notes'])
					->setTitle($data['title'])
					->setType($data['type'])
					->setLocation($data['location'])
					->setSalary($data['salary'])
					->setClosingDate(new \DateTimeImmutable($data['closing_date']))
					;
    
            $entityManager->persist($jobOffer);
            $entityManager->flush();

			return $this->redirectToRoute('app_job_offer_edit', ['id' => $jobOffer->getId()]);
        }



        return $this->render('job_offer/edit.html.twig', [
            'job_offer' => $jobOffer,
            'job_categories' => $jobCategories,
			'clients' => $clients,
        ]);
    }

    #[Route('/{id}', name: 'app_job_offer_show', methods: ['GET'])]
    public function show(JobOffer $jobOffer, ApplicationRepository $applicationRepository, EntityManagerInterface $entityManager, TokenStorageInterface $tokenStorage, CandidateRepository $candidateRepository, JobOfferRepository $jobOfferRepository): Response
    {

        $applications = $applicationRepository->findBy(['job_offer' => $jobOffer->getId()]);
        

        // Constants for the Apply_button
        $allreadyApply=0;
        $candidate = null;

        if ($tokenStorage->getToken()){            
            $user = $tokenStorage->getToken()->getUser();
            $candidates = $candidateRepository->findBy(['user' => $user->getId()]);
            $candidate = $candidates[0];
    
            foreach($applications as $application){
                if ($application->getCandidateId()->getId() == $candidate->getId()){
                    $allreadyApply+=1;
                };
            }
        }

        // Constants for the Previous/Next_buttons
        $queryBuilder = $jobOfferRepository->createQueryBuilder('e')
            ->select('e')
            ->orderBy('e.id', 'ASC');
        $query = $queryBuilder->getQuery();

        $entities = $query->getResult();
        $nextEntity = null;
        $previousEntity = null;
        foreach ($entities as $index => $currentEntity) {
            if ($currentEntity->getId() == $jobOffer->getId()) {
                $nextEntity = $entities[$index + 1] ?? null;
                if ($index > 0) {
                    $previousEntity = $entities[$index - 1];
                }
                break;
            }
        }

        

        // dd($previousEntity, $nextEntity);

        return $this->render('job_offer/show.html.twig', [
            'job' => $jobOffer,
            'candidate' => $candidate,
            'allreadyApply' => $allreadyApply,
            'previousEntity' => $previousEntity,
            'nextEntity' => $nextEntity,
        ]);
    }

    #[Route('/registration/{id}', name: 'app_job_offer_applicationRegister', methods: ['GET'])]
    public function applicationRegister(JobOffer $jobOffer, ApplicationRepository $applicationRepository, EntityManagerInterface $entityManager, TokenStorageInterface $tokenStorage, CandidateRepository $candidateRepository): Response
    {
        $user = $tokenStorage->getToken()->getUser();
        $candidate = $candidateRepository->findBy(['user' => $user->getId()]);

        $application = new Application($jobOffer, $candidate[0]);
        $application->setCreatedAt(new \DateTimeImmutable(date('Y-m-d H:i:s')));
        $entityManager->persist($application);
        $entityManager->flush();

        // $applications = $applicationRepository->findBy(['job_offer' => $jobOffer->getId()]);

        // return $this->render('job_offer/show.html.twig', [
        //     'job' => $jobOffer,
        //     'applications' => $applications,
        // ]);

        return $this->redirectToRoute('app_job_offer_show', [
            'id' => $jobOffer->getId()
        ]);
    }

    #[Route('/{id}', name: 'app_job_offer_delete', methods: ['POST'])]
    public function delete(Request $request, JobOffer $jobOffer, JobOfferRepository $jobOfferRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$jobOffer->getId(), $request->request->get('_token'))) {
            $jobOfferRepository->remove($jobOffer, true);
        }

        return $this->redirectToRoute('app_admin_job_offer_index', [], Response::HTTP_SEE_OTHER);
    }
}
