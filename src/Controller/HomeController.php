<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;
use App\Repository\JobOfferRepository;

class HomeController extends AbstractController
{
    private $tokenStorage;

    public function __construct(TokenStorageInterface $tokenStorage)
    {
        $this->tokenStorage = $tokenStorage;
    }

    public function maMethode()
    {
        // Récupération de l'utilisateur connecté
        $user = $this->tokenStorage->getToken()->getUser();

        // Vérification si l'utilisateur est authentifié
        if ($user instanceof UserInterface) {
            // Récupération des rôles de l'utilisateur
            $roles = $user->getRoles();
        }

        // ...
    }

    // #[Route('/', name: 'app_home')]
    // public function index(): Response
    // {
    //     // Check if user is authenticated
    //     if ($this->getUser()) {
    //         // Get the current user
    //         $user = $this->getUser();
        
    //         // Check if the user object is valid
    //         if ($user instanceof UserInterface) {
                
    //             // Check if user has ADMIN role
    //             if (in_array('ROLE_ADMIN', $user->getRoles())) {
    //                 // Redirect to admin route
    //                 return $this->redirectToRoute('app_admin_index');
    //             }
    //             // If user does not have ADMIN role, redirect to app_candidate_new with the user's id
    //             return $this->redirectToRoute('app_candidate_new', [
    //                 'id' => $user->getId(),
    //             ]);
    //         }
    //     }

    //     return $this->render('home/index.html.twig', [
    //         'controller_name' => 'HomeController',
    //     ]);
    // }

    #[Route('/', name: 'app_home')]
public function index(JobOfferRepository $jobOfferRepository): Response
{
    // Check if user is authenticated
    if ($this->getUser()) {
        // Get the current user
        $user = $this->getUser();
    
        // Check if the user object is valid
        if ($user instanceof UserInterface) {
            // Check if user has the ROLE_USER
            if (in_array('ROLE_USER', $user->getRoles())) {
                // Redirect to app_candidate_new with the user's id
                return $this->redirectToRoute('app_candidate_new', [
                    'id' => $user->getId(),
                ]);
            }
            // Check if user has the ROLE_ADMIN
            elseif (in_array('ROLE_ADMIN', $user->getRoles())) {
                // Redirect to admin route
                return $this->redirectToRoute('app_admin_index');
            }
        }
    }

    // Render the homepage template
    return $this->render('home/index.html.twig', [
        'controller_name' => 'HomeController',
        'job_offers' => $jobOfferRepository->findBy([], ['creation_date' => 'DESC']),
    ]);
}

    #[Route('/contact', name: 'show_contact')]
    public function contact(): Response
    {
        return $this->render('home/contact.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/company', name: 'show_company')]
    public function company(): Response
    {
        return $this->render('home/company.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/terms', name: 'terms_of_use')]
    public function terms(): Response
    {
        return $this->render('home/termsOfUse.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
