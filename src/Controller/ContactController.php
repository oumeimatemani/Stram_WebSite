<?php

namespace App\Controller;
use App\Entity\Newsletter;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\NewsletterRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;


class ContactController extends AbstractController
{

    public function list(NewsletterRepository $newsletterRepository): JsonResponse
    {
        $newsletters = $newsletterRepository->findAll();
        return $this->json($newsletters);
    }
    public function read(int $id,NewsletterRepository $newsletterRepository): JsonResponse
    {
        $newsletter = $newsletterRepository->find([$id]);
        return $this->json($newsletter);
    }

    public function createNewsletter(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        $mail = $data['mail'];

        $newsletter = new Newsletter();
        $newsletter->setMail($mail);

        $em = $this->getDoctrine()->getManager();
        $em->persist($newsletter);
        $em->flush();

        return $this->json(['status' => 'Newsletter created!'], Response::HTTP_CREATED);
   }


    public function deleteNewsLetter(int $id, NewsletterRepository $newsletterRepository){
        $newsletter = $newsletterRepository->find($id);
        $entityManager = $this->getDoctrine()->getManager();
        if (!$newsletter) {
            return $this->json(['message' => 'newsletter not found'], Response::HTTP_NOT_FOUND);
        }
        $entityManager->remove($newsletter);
        $entityManager->flush();
        return $this->json(['message' => 'newsletter is deleted'], Response::HTTP_OK);
    }





    // #[Route('/contact', name: 'app_contact')]
    // public function index(): Response
    // {
    //     return $this->render('contact/index.html.twig', [
    //         'controller_name' => 'ContactController',
    //     ]);
    // }

    // #[Route('/algerie', name: 'app_contact_algerie')]
    // public function algerie(): Response
    // {
    //     return $this->render('contact/algerie.html.twig', [
    //         'controller_name' => 'ContactController',
    //     ]);
    // }

    // #[Route('/senegal', name: 'app_contact_senegal')]
    // public function senegal(): Response
    // {
    //     return $this->render('contact/senegal.html.twig', [
    //         'controller_name' => 'ContactController',
    //     ]);
    // }

    // #[Route('/niger', name: 'app_contact_niger')]
    // public function niger(): Response
    // {
    //     return $this->render('contact/niger.html.twig', [
    //         'controller_name' => 'ContactController',
    //     ]);
    // }

    // #[Route('/benin', name: 'app_contact_benin')]
    // public function benin(): Response
    // {
    //     return $this->render('contact/benin.html.twig', [
    //         'controller_name' => 'ContactController',
    //     ]);
    // }
}
