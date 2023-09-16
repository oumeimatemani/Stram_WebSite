<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ServicesController extends AbstractController
{
    #[Route('/gestionServices', name: 'services')]
    public function gestionServices(): Response
    {
        return $this->render('affichage/services/index.html.twig', [
            'controller_name' => 'ServicesController',
        ]);
    }
}
