<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]
    public function index(): Response
    {
        return $this->render('contact/index.html.twig', [
            'controller_name' => 'ContactController',
        ]);
    }

    #[Route('/algerie', name: 'app_contact_algerie')]
    public function algerie(): Response
    {
        return $this->render('contact/algerie.html.twig', [
            'controller_name' => 'ContactController',
        ]);
    }

    #[Route('/senegal', name: 'app_contact_senegal')]
    public function senegal(): Response
    {
        return $this->render('contact/senegal.html.twig', [
            'controller_name' => 'ContactController',
        ]);
    }

    #[Route('/niger', name: 'app_contact_niger')]
    public function niger(): Response
    {
        return $this->render('contact/niger.html.twig', [
            'controller_name' => 'ContactController',
        ]);
    }

    #[Route('/benin', name: 'app_contact_benin')]
    public function benin(): Response
    {
        return $this->render('contact/benin.html.twig', [
            'controller_name' => 'ContactController',
        ]);
    }
}
