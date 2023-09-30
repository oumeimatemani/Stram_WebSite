<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RenforcementFibreCarboneController extends AbstractController
{
    #[Route('/renforcement/fibre/carbone', name: 'renforcementFibreCarbone')]
    public function index(): Response
    {
        return $this->render('Services/TravauxSpéciaux/RéparationsRenforcement/RenforcementFibreCarbone.html.twig', [
            'controller_name' => 'RenforcementFibreCarboneController',
        ]);
    }
}
