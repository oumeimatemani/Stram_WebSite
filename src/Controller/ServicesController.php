<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\ServiceType;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Service;


class ServicesController extends AbstractController
{
    #[Route('/Services', name: 'services')]
    public function Services(): Response
    { 
        // Récupérer la liste des services depuis la base de données
        $serviceRepository = $this->getDoctrine()->getRepository(Service::class);
        $services = $serviceRepository->findAll();

        return $this->render('baseFront.html.twig', [
            'services' => $services, 
        ]);
    }


    #[Route('/gestionServices', name: 'gestionServices')]
    public function gestionServices(): Response
    { 
        // Récupérer la liste des services depuis la base de données
        $serviceRepository = $this->getDoctrine()->getRepository(Service::class);
        $services = $serviceRepository->findAll();

        $em = $this->getDoctrine()->getManager()->getRepository(Service::class); 
        $service = $em->findAll(); // Select * from services;
        return $this->render('Services/serviceBack.html.twig', ['listS' => $service]);
    }
    
  
    /**
     * @Route("/ajouterService", name="ajouterService")
     */
    public function ajouterService(Request $request): Response
    {
        $service = new Service();
        $form = $this->createForm(ServiceType::class, $service);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($service);
            $em->flush();

            $this->addFlash('success', 'Le service a été ajouté avec succès.');
            return $this->redirectToRoute('gestionServices');
        }

        return $this->render(
            'Services/ajoutService.html.twig',
            ['S' => $form->createView()]
        );
    }
    
    


}
