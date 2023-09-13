<?php

namespace App\Controller;

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

    #[Route('/carriereAdmin', name: 'app_carriereAdmin')]
    public function carriereAdmin(): Response
    {
        return $this->render('carriere/CarriereBack', [
            'controller_name' => 'CarriereController',
        ]);
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
}
