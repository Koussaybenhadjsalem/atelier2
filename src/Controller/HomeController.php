<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    #[Route('/show', name: 'app_show')]
    public function show(): Response
    {
        return new Response('<h1>bonjour 3a39</h1>');
    }
    #[Route('/msg', name: 'msg')]
    public function showmsg(): Response
    {
        return $this->render('home/msg.html.twig');
    }
    
    #[Route('/msg/{name}', name: 'show_name')] 
    public function showService(string $name): Response
    {
        return $this->render('home/msg.html.twig', [
            'name' => $name,]);
    }
    #[Route('/tab', name: 'show_tab')] 
    public function showTab(): Response
    {
        $authors = array(
            array('id' => 1, 'picture' => '/images/Victor-Hugo.jpg','username' => 'Victor Hugo', 'email' =>
            'victor.hugo@gmail.com ', 'nb_books' => 10),
            array('id' => 2, 'picture' => '/images/william-shakespeare.jpg','username' => ' William Shakespeare', 'email' =>
            ' william.shakespeare@gmail.com', 'nb_books' => 200 ),
            array('id' => 3, 'picture' => '/images/Taha_Hussein.jpg','username' => 'Taha Hussein', 'email' =>
            'taha.hussein@gmail.com', 'nb_books' => 300),
            );
        return $this->render('home/msg.html.twig', [
            'authors' => $authors,]);
    }
    #[Route('/details/{id}', name: 'details')] 
    public function details($id): Response
    {
        return new Response('authors'.$id);

    }
    
    
}