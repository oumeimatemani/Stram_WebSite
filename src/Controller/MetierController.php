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
     * @Route("/metiers", name="metiers")
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

public function modifierMetier(Request $request, EntityManagerInterface $entityManager, MetierRepository $metierRepository, $id): Response
{
    $metier = $metierRepository->find($id);

    if (!$metier) {
        throw $this->createNotFoundException('Metier introuvable ');
    }

    // Créez le formulaire avec l'entité Metier existante
    $form = $this->createForm(MetierType::class, $metier);

    // Traitez la soumission du formulaire
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        // Gérez le téléchargement du fichier (image) si nécessaire
        $fileUpload = $form->get('image')->getData();
        if ($fileUpload) {
            $fileName = md5(uniqid()) . '.' . $fileUpload->guessExtension();
            $fileUpload->move($this->getParameter('kernel.project_dir') . '/public/uploads', $fileName);
            $metier->setImage($fileName);
        }

        // Enregistrez les modifications dans la base de données
        $entityManager->flush();

        $this->addFlash('success', 'La metier a été modifiée avec succès.');
        return $this->redirectToRoute('metiers');
    }

    // Affichez le formulaire de modification
    return $this->render('metier/modifMetier.html.twig', [
        'form' => $form->createView(),
        'metier' => $metier,
    ]);
}


    /**
     * @Route("/suppressionMetier/{id}", name="suppressionMetier")
     */
    public function suppressionMetier(EntityManagerInterface $entityManager, MetierRepository $metierRepository, $id): Response
    {
        $metier = $metierRepository->find($id);
    
        if (!$metier) {
            throw $this->createNotFoundException('Metier introuvable ');
        }
    
        $entityManager->remove($metier);
        $entityManager->flush();
    
        return $this->redirectToRoute('metiers');
    }
    
}
