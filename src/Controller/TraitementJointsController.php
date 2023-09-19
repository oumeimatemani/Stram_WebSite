<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TraitementJointsController extends AbstractController
{
    #[Route('/traitement/joints', name: 'traitementJoints')]
    public function index(): Response
    {
        return $this->render('Services/TravauxSpéciaux/TraitementJoints.html.twig', [
            'controller_name' => 'TraitementJointsController',
        ]);
    }
}
