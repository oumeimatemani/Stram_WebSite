<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RenforcementChemisageClassiqueController extends AbstractController
{
    #[Route('/renforcement/chemisage/classique', name: 'app_renforcement_chemisage_classique')]
    public function index(): Response
    {
        return $this->render('Services/TravauxSpéciaux/RéparationsRenforcement/RenforcementChemisageClassique.html.twig', [
            'controller_name' => 'RenforcementChemisageClassiqueController',
        ]);
    }
}
