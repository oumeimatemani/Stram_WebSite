<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StramController extends AbstractController
{
    #[Route('/gestionStram', name: 'stram')]
    public function gestionStram(): Response
    {
        return $this->render('affichage/stram/index.html.twig', [
            'controller_name' => 'StramController',
        ]);
    }
}
