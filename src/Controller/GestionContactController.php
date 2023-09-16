<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\GestionContact;
use Symfony\Component\HttpFoundation\Request;



class GestionContactController extends AbstractController
{
    #[Route('/gestionContact', name: 'gestion_Contact')]
    public function gestionContact(): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $gestionContact = $entityManager->getRepository(GestionContact::class)->findOneBy(['id' => 1]); 

        return $this->render('affichage/gestionContact/index.html.twig', [
            'controller_name' => 'GestionContactController',
        ]);
    } 





    #[Route('/modifierContactTunisie', name: 'modifier_contact_tunisie')]
    public function modifierContactTunisie(Request $request): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $gestionContact = $entityManager->getRepository(GestionContact::class)->findOneBy(['id' => 1]);

        if (!$gestionContact) {
            throw $this->createNotFoundException('Coordonnées de la Tunisie non trouvées.');
        }

        if ($request->isMethod('POST')) {
            $gestionContact->setTelTunisie($request->request->get('telTunisie'));
            $gestionContact->setFaxTunisie($request->request->get('FaxTunisie'));
            $gestionContact->setEmailTunisie($request->request->get('EmailTunisie'));
            $gestionContact->setAdresseTunisie($request->request->get('adresseTunisie'));

            $entityManager->flush();

            return $this->redirectToRoute('/modifierContactTunisie');        }

    
        return $this->render('affichage/gestionContact/index.html.twig', [
            'controller_name' => 'GestionContactController',
        ]);
    }


    #[Route('/supprimerContactTunisie', name: 'supprimer_contact_tunisie')]
    public function supprimerContactTunisie(): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $gestionContact = $entityManager->getRepository(GestionContact::class)->findOneBy(['id' => 1]);

        if (!$gestionContact) {
            throw $this->createNotFoundException('Coordonnées de la Tunisie non trouvées.');
        }

        $entityManager->remove($gestionContact);
        $entityManager->flush();

        return $this->redirectToRoute('affichage/gestionContact/index.html.twig');
    }


    #[Route('/modifierContactAlgerie', name: 'modifier_contact_algerie')]
    public function modifierContactAlgerie(Request $request): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $gestionContact = $entityManager->getRepository(GestionContact::class)->findOneBy(['id' => 1]);

        if (!$gestionContact) {
            throw $this->createNotFoundException('Coordonnées de l Algerie non trouvées.');
        }

        if ($request->isMethod('POST')) {
            $gestionContact->setTelAlgerie($request->request->get('telAlgerie'));
            $gestionContact->setFaxAlgerie($request->request->get('FaxAlgerie'));
            $gestionContact->setEmailAlgerie($request->request->get('EmailAlgerie'));
            $gestionContact->setAdresseAlgerie($request->request->get('adresseAlgerie'));

            $entityManager->flush();

            return $this->redirectToRoute('/modifierContactAlgerie');        }

    
        return $this->render('affichage/gestionContact/index.html.twig', [
            'controller_name' => 'GestionContactController',
        ]);
    }


    #[Route('/supprimerContactAlgerie', name: 'supprimer_contact_algerie')]
    public function supprimerContactAlgerie(): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $gestionContact = $entityManager->getRepository(GestionContact::class)->findOneBy(['id' => 1]);

        if (!$gestionContact) {
            throw $this->createNotFoundException('Coordonnées de l Algerie non trouvées.');
        }

        $entityManager->remove($gestionContact);
        $entityManager->flush();

        return $this->redirectToRoute('affichage/gestionContact/index.html.twig');
    }














}
