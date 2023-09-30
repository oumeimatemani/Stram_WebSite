<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SolsTechniquesController extends AbstractController
{
    #[Route('/sols/techniques', name: 'solsTechniques')]
    public function index(): Response
    {
        return $this->render('Services/TravauxSpéciaux/SolsTechniques.html.twig', [
            'controller_name' => 'SolsTechniquesController',
        ]);
    }
}
