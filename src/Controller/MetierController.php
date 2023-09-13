<?php

namespace App\Controller;


use App\Entity\Metier;
use App\Form\MetierType;
use App\Repository\MetierRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class MetierController extends AbstractController
{
    /**
     * @Route("/metiers", name="display_metiers")
     */
    public function index(): Response
    {

        $em = $this->getDoctrine()->getManager()->getRepository(Metier::class); // ENTITY MANAGER ELY FIH FONCTIONS PREDIFINES

        $metier = $em->findAll(); // Select * from metiers;
        return $this->render('metier/metierBack.html.twig', ['listM' => $metier]);
    }



    /**
     * @Route("/ajouterMetier", name="ajouterMetier")
     */

    public function ajouterMetier(Request $request): Response
    {
        $metier = new Metier();
        $form = $this->createForm(MetierType::class, $metier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $fileUpload = $form->get('image')->getData();
            $fileName = md5(uniqid()) . '.' . $fileUpload->guessExtension();
            $fileUpload->move($this->getParameter('kernel.project_dir') . '/public/uploads', $fileName);
            $metier->setImage($fileName);


            $em = $this->getDoctrine()->getManager();
            $em->persist($metier);
            $em->flush();
            $this->addFlash('success', 'La métier a été ajoutée avec succès.');
            return $this->redirectToRoute('metiers');
        }

        return $this->render(
            'metier/ajoutMetier.html.twig',
            ['M' => $form->createView(), 'm' => $metier]

        );
    }



    /**
     * @Route("/modifierMetier/{id}", name="modifierMetier")
     */
    public function modifierMetier(Request $request, $id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $metier = $entityManager->getRepository(Metier::class)->find($id);

        if (!$metier) {
            throw $this->createNotFoundException('Metier introuvable ');
        }

        $form = $this->createForm(MetierType::class, $metier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $fileUpload = $form->get('image')->getData();
            $fileName = md5(uniqid()) . '.' . $fileUpload->guessExtension();
            $fileUpload->move($this->getParameter('kernel.project_dir') . '/public/uploads', $fileName);
            $metier->setImage($fileName);

            $em = $this->getDoctrine()->getManager();
            $em->persist($metier);
            $em->flush();
            $this->addFlash('success', 'La metier  a été modifié avec succès.');
            return $this->redirectToRoute('metiers');
        }

        return $this->render(
            'metiers/modifMetier.html.twig',
            ['C' => $form->createView()]
        );
    }


    /**
     * @Route("/suppressionMetier/{id}", name="suppressionMetier")
     */

    public function suppressionMetier(Metier  $metier): Response
    {

        $em = $this->getDoctrine()->getManager();
        $em->remove($metier);
        $em->flush();
        return $this->redirectToRoute('metiers');
    }
}
