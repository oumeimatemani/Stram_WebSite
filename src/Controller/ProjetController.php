<?php

namespace App\Controller;


use App\Entity\Projet;
use App\Form\ProjetType;
use App\Repository\ClientRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProjetController extends AbstractController
{

    /**
     * @Route("/projets", name="display_projets")
     */
    public function index(): Response
    {

        $em = $this->getDoctrine()->getManager()->getRepository(Projet::class); // ENTITY MANAGER ELY FIH FONCTIONS PREDIFINES

        $projet = $em->findAll(); // Select * from projets;
        return $this->render('projet/projetBack.html.twig', ['listP' => $projet]);
    }


    /**
     * @Route("/ajouterProjet", name="ajouterProjet")
     */
    public function ajouterProjet(Request $request): Response
    {
        $projet = new Projet();
        $form = $this->createForm(ProjetType::class, $projet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Gérer l'upload d'image et autres opérations ici
            // Persist et flush l'entité $projet

            $em = $this->getDoctrine()->getManager();
            $em->persist($projet);
            $em->flush();

            $this->addFlash('success', 'Le projet a été ajouté avec succès.');
            return $this->redirectToRoute('display_projets');
        }

        return $this->render(
            'projet/ajoutProjet.html.twig',
            ['P' => $form->createView()]
        );
    }


    /**
     * @Route("/modifierProjet/{id}", name="modifierProjet")
     */
    public function modifierProjet(Request $request, $id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $projet = $entityManager->getRepository(Projet::class)->find($id);

        if (!$projet) {
            throw $this->createNotFoundException('projet introuvable');
        }

        $form = $this->createForm(ProjetType::class, $projet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $fileUpload = $form->get('image')->getData();
            $fileName = md5(uniqid()) . '.' . $fileUpload->guessExtension();
            $fileUpload->move($this->getParameter('kernel.project_dir') . '/public/uploads', $fileName);
            $projet->setLogo($fileName);

            $em = $this->getDoctrine()->getManager();
            $em->persist($projet);
            $em->flush();
            $this->addFlash('success', 'Le projet  a été modifié avec succès.');
            return $this->redirectToRoute('projets');
        }

        return $this->render(
            'projet/modifProjet.html.twig',
            ['C' => $form->createView()]
        );
    }


    /**
     * @Route("/suppressionProjet/{id}", name="suppressionProjet")
     */

    public function suppressionProjet(Projet  $projet): Response
    {

        $em = $this->getDoctrine()->getManager();
        $em->remove($projet);
        $em->flush();
        return $this->redirectToRoute('projets');
    }
}
