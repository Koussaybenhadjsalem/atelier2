<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse; 
use Symfony\Component\Routing\Annotation\Route;

class ServiceController extends AbstractController
{
    #[Route('/service', name: 'app_service')]
    public function index(): Response
    {
        return $this->render('service/index.html.twig', [
            'controller_name' => 'ServiceController',
        ]);
    }

    #[Route('/msg/{name}', name: 'app_service_show')] 
    public function showService(string $name): Response
    {
        return $this->render('home/msg.html.twig', [
            'name' => $name,
        ]);
    }

    #[Route('/gotoindex', name: 'app_go_to_index')] 
    public function goToIndex(): RedirectResponse
    {
        return $this->redirectToRoute('app_home');
    }
}
