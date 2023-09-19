<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ImperméabilisationController extends AbstractController
{
    #[Route('/Imperméabilisation', name: 'Imperméabilisation')]
    public function index(): Response
    {
        return $this->render('Services/TravauxSpéciaux/ÉtanchéitéImperméabilisation.html.twig/Imperméabilisation.html.twig', [
            'controller_name' => 'ImperméabilisationController',
        ]);
    }
}
