<?php

namespace App\Controller;

use App\Entity\Acceuil;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;


class FrontController extends AbstractController
{

    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }


    /**
     * @Route("/", name="app_front")
     */
    public function index(): Response
    {
       $acceuil = $this->entityManager->getRepository(Acceuil::class)->find(1); 
       return $this->render('baseFront.html.twig', [
           'acceuil' => $acceuil,
       ]);    }
}
