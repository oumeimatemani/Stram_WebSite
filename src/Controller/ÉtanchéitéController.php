<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ÉtanchéitéController extends AbstractController
{
    #[Route('/Étanchéité', name: 'Étanchéité')]
    public function index(): Response
    {
        return $this->render('Services/TravauxSpéciaux/ÉtanchéitéImperméabilisation.html.twig/Étanchéité.html.twig', [
            'controller_name' => 'ÉtanchéitéController',
        ]);
    }
}
