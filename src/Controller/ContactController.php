<?php

namespace App\Controller;
use App\Entity\Newsletter;
use App\Entity\Contact;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\NewsletterRepository;
use App\Repository\ContactRepository;
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

    public function listContacts(ContactRepository $contactRepository): JsonResponse
    {
        $contacts = $contactRepository->findAll();
        return $this->json($contacts);
    }
    public function readContact(int $id,ContactRepository $contactRepository): JsonResponse
    {
        $contact = $contactRepository->find([$id]);
        return $this->json($contact);
    }

    public function createContact(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        $contact = new Contact();
        if(isset($data['subject'])) {$subject= $data['subject']; $contact->setSubject($subject); }
        if(isset($data['tel'])) {$tel= $data['tel']; $contact->setTel($tel); }
        if ( !isset($data['message']) ||  !isset($data['name']) || !isset($data['mail']) ) {
            return $this->json(['status' => 'erreur!'], Response::HTTP_BAD_REQUEST);
        }
        $mail = $data['mail'];
        $name = $data['name'];
        $message = $data['message']; 
        
        $contact->setMail($mail);
        $contact->setName($name);
        
        
        $contact->setMessage($message);
        $em = $this->getDoctrine()->getManager();
        $em->persist($contact);
        $em->flush();

        return $this->json(['status' => 'contact created!'], Response::HTTP_CREATED);
   }


    public function deleteContact(int $id, ContactRepository $contactRepository){
        $contact = $contactRepository->find($id);
        $entityManager = $this->getDoctrine()->getManager();
        if (!$contact) {
            return $this->json(['message' => 'contact not found'], Response::HTTP_NOT_FOUND);
        }
        $entityManager->remove($contact);
        $entityManager->flush();
        return $this->json(['message' => 'contact is deleted'], Response::HTTP_OK);
    }

}
