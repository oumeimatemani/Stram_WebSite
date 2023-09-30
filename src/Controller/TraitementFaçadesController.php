<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TraitementFaçadesController extends AbstractController
{
    #[Route('/TraitementFaçades', name: 'TraitementFaçades')]
    public function index(): Response
    {
        return $this->render('Services/TravauxSpéciaux/RevêtementTraitementFaçades/TraitementFaçades.html.twig', [
            'controller_name' => 'TraitementFaçadesController',
        ]);
    }
}
