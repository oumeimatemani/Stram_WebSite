<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AcceuilController extends AbstractController
{
    #[Route('/gestionAcceuil', name: 'acceuil')]
    public function gestionAcceuil(): Response
    {
        return $this->render('back/affichage/acceuil.html.twig', [
            'controller_name' => 'AcceuilController',
        ]);
    }
}
