<?php

namespace App\Controller;

use App\Entity\JobOffer;
use App\Form\JobOfferType;
use App\Form\EntityType;
use App\Repository\JobOfferRepository;
use App\Repository\JobCategoryRepository;
use App\Repository\ClientRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

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
            'job_offers' => $jobOfferRepository->findAll(),
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
    public function show(JobOffer $jobOffer): Response
    {
        return $this->render('job_offer/show.html.twig', [
            'job' => $jobOffer,
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
