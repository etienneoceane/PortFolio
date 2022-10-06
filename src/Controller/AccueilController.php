<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    #[Route('/', name: 'accueil')]
    public function index(): Response
    {
        return $this->render('accueil/index.html.twig');
    }


// NAVBAR


    #[Route('/curriculum', name: 'curriculum')]
    public function curriculum(): Response
    {
        return $this->render('cv/curriculum.html.twig', [
            'controller_name' => 'AccueilController',
        ]);
    }
}
