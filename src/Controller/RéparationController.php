<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RéparationController extends AbstractController
{
    #[Route('/reparation', name: 'reparation')]
    public function index(): Response
    {
        return $this->render('Services/TravauxSpéciaux/RéparationsRenforcement/Réparation.html.twig', [
            'controller_name' => 'RéparationController',
        ]);
    }
}
