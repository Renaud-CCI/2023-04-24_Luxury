<?php

namespace App\Controller;

use App\Entity\Admin;
use App\Form\AdminType;
use App\Repository\AdminRepository;
use App\Repository\ClientRepository;
use App\Repository\CandidateRepository;
use App\Repository\JobOfferRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin')]
class AdminController extends AbstractController
{
    #[Route('/', name: 'app_admin_index', methods: ['GET'])]
    public function index(AdminRepository $adminRepository, ClientRepository $clientRepository, CandidateRepository $candidateRepository, JobOfferRepository $jobOfferRepository): Response
    {
        $clients = $clientRepository->findBy(array(), array('creation_date' => 'DESC'));
        $candidates = $candidateRepository->findBy(array(), array('created_at' => 'DESC'));
        $jobOffers = $jobOfferRepository->findBy(array(), array('creation_date' => 'DESC'));

// dd($jobOffers);

        return $this->render('admin/index.html.twig', [
            'clients' => $clients,
            'candidates' => $candidates,
            'jobs' => $jobOffers,
        ]);
    }

    #[Route('/admin/job_offers', name: 'app_admin_job_offer_index', methods: ['GET'])]
    public function job_offer_index(ClientRepository $clientRepository, JobOfferRepository $jobOfferRepository): Response
    {
        $jobOffers = $jobOfferRepository->findBy(array(), array('creation_date' => 'DESC'));


        return $this->render('admin/job_offers/index.html.twig', [
            'jobs' => $jobOffers,
        ]);
    }

    #[Route('/{id}', name: 'app_admin_show', methods: ['GET'])]
    public function show(Admin $admin): Response
    {
        return $this->render('admin/show.html.twig', [
            'admin' => $admin,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_admin_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Admin $admin, AdminRepository $adminRepository): Response
    {
        $form = $this->createForm(AdminType::class, $admin);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $adminRepository->save($admin, true);

            return $this->redirectToRoute('app_admin_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin/edit.html.twig', [
            'admin' => $admin,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_admin_delete', methods: ['POST'])]
    public function delete(Request $request, Admin $admin, AdminRepository $adminRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$admin->getId(), $request->request->get('_token'))) {
            $adminRepository->remove($admin, true);
        }

        return $this->redirectToRoute('app_admin_index', [], Response::HTTP_SEE_OTHER);
    }
}
