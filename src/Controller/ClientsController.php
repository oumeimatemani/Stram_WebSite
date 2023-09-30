<?php

namespace App\Controller;

use App\Entity\Client;
use App\Form\ClientType;
use App\Repository\ClientRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\Loader\Configurator\form;


class ClientsController extends AbstractController
{
    /**
     * @Route("/clients", name="display_clients")
     */
    public function index(): Response
    {

        $em = $this->getDoctrine()->getManager()->getRepository(Client::class); 

        $client = $em->findAll(); // Select * from clients;
        return $this->render('clients/index.html.twig', ['listC' => $client]);
    }

    /**
     * @Route("/clientsAdmin", name="display_clientsAdmin")
     */
    public function clientsAdmin(): Response
    {

        $em = $this->getDoctrine()->getManager()->getRepository(Client::class); 

        $client = $em->findAll(); // Select * from clients;
        return $this->render('clients/clientBack.html.twig', ['listC' => $client]);
    }



    /**
     * @Route("/ajouterClient", name="ajouterClient")
     */

    public function ajouterClient(Request $request): Response
    {

        $client = new Client();
        $form = $this->createForm(ClientType::class, $client);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $fileUpload = $form->get('logo')->getData();
            $fileName = md5(uniqid()) . '.' . $fileUpload->guessExtension();
            $fileUpload->move($this->getParameter('kernel.project_dir') . '/public/uploads', $fileName);
            $client->setLogo($fileName);


            $em = $this->getDoctrine()->getManager();
            $em->persist($client);
            $em->flush();
            $this->addFlash('success', 'Le client  a été ajouté avec succès.');
            return $this->redirectToRoute('clients_admin');
        }

        return $this->render(
            'clients/ajoutClient.html.twig',
            ['C' => $form->createView(), 'c' => $client]

        );
    }



    /**
     * @Route("/modifierClient/{id}", name="modifierClient")
     */
    public function modifierClient(Request $request, $id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $client = $entityManager->getRepository(Client::class)->find($id);

        if (!$client) {
            throw $this->createNotFoundException('Client not found');
        }

        $form = $this->createForm(ClientType::class, $client);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $fileUpload = $form->get('logo')->getData();
            $fileName = md5(uniqid()) . '.' . $fileUpload->guessExtension();
            $fileUpload->move($this->getParameter('kernel.project_dir') . '/public/uploads', $fileName);
            $client->setLogo($fileName);

            $em = $this->getDoctrine()->getManager();
            $em->persist($client);
            $em->flush();
            $this->addFlash('success', 'Le client  a été modifié avec succès.');
            return $this->redirectToRoute('clients_admin');
        }

        return $this->render(
            'clients/modifClient.html.twig',
            ['C' => $form->createView()]
        );
    }


    /**
     * @Route("/suppressionClient/{id}", name="suppressionClient")
     */

     public function suppressionClient(EntityManagerInterface $entityManager, ClientRepository $clientRepository, $id): Response
     {
         $client = $clientRepository->find($id);
     
         if (!$client) {
             throw $this->createNotFoundException('Client introuvable ');
         }
     
         $entityManager->remove($client);
         $entityManager->flush();
     
         return $this->redirectToRoute('clients_admin');
     }
}
