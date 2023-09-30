<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ClientRepository;
use App\Entity\Client;

class BackController extends AbstractController
{
    #[Route('/admin', name: 'app_back')]
    public function index(ClientRepository $clientRepository): Response
    {
        $topClients = $clientRepository->findTopClients();

        return $this->render('back/index.html.twig', [
            'controller_name' => 'BackController',
            'topClients' => $topClients,
        ]);
    }
}
