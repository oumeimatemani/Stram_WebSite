<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RevêtementTechniqueController extends AbstractController
{
    #[Route('/RevêtementTechnique', name: 'RevêtementTechnique')]
    public function index(): Response
    {
        return $this->render('Services/TravauxSpéciaux/RevêtementTraitementFaçades/RevêtementTechnique.html.twig', [
            'controller_name' => 'RevêtementTechniqueController',
        ]);
    }
}
