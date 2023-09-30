<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuiSommesNousController extends AbstractController
{
    #[Route('/stram', name: 'app_qui_sommes_nous')]
    public function index(): Response
    {
        return $this->render('qui_sommes_nous/index.html.twig', [
            'controller_name' => 'QuiSommesNousController',
        ]);
    }
}
