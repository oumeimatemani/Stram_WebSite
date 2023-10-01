<?php

namespace App\Controller;

use App\Entity\Carriere; 
use App\Form\CarriereType;
use App\Repository\CarriereRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class CarriereController extends AbstractController
{
    #[Route('/carriere', name: 'carriere_index')]
    public function index(): Response
    {
        return $this->render('carriere/formulaire.html.twig', [
            'controller_name' => 'CarriereController',
        ]);
    }

 
    /**
     * @Route("/carriereAdmin", name="carriereAdmin")
     */
    public function carriereAdmin(): Response
    {

        $em = $this->getDoctrine()->getManager()->getRepository(Carriere::class); 

        $carriere = $em->findAll(); 
        return $this->render('carriere/CarriereBack.html.twig', ['listCa' => $carriere]);
    }


    public function submit(Request $request): Response
    {
        // Traitement des données soumises par le formulaire
        $typeCandidature = $request->request->get('typeCandidature');
        $origineCandidature = $request->request->get('origineCandidature');
        $nomPrenom = $request->request->get('nomPrenom');
        $adresseMail = $request->request->get('adresseMail');
        $cvFile = $request->files->get('cv');
        $lettreMotivationFile = $request->files->get('lettreMotivation');
        $referenceOffre = $request->request->get('referenceOffre');
        $commentaire = $request->request->get('commentaire');

        // Valider les données soumises (vous pouvez utiliser les validateurs de Symfony)
        // Enregistrer la candidature dans la base de données si nécessaire
        // Si vous avez créé une entité "Carriere" et configuré Doctrine, vous pouvez utiliser l'EntityManager pour persister l'entité dans la base de données.

        // Rediriger l'utilisateur vers une page de confirmation ou afficher un message de succès
        return $this->redirectToRoute('confirmation_page');
    }



    
    /**
     * @Route("/ajouterCarriere", name="ajouterCarriere")
     */
    public function ajouterCarriere(Request $request): Response
    {
        $carriere = new Carriere();
        $form = $this->createForm(CarriereType::class, $carriere);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($carriere);
            $em->flush();

            $this->addFlash('success', 'La carrierea été ajoutée avec succès.');
            return $this->redirectToRoute('carriereAdmin');
        }

        return $this->render(
            'carriere/ajoutCarriere.html.twig',
            ['Ca' => $form->createView()]
        );
    }
    

}
