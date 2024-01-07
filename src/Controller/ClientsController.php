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
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\String\UnicodeString;
use Symfony\Component\Filesystem\Filesystem;



class ClientsController extends AbstractController
{
    /**
     * @Route("/clients", name="display_clients")
     */
    public function index(): Response
    {

        $em = $this->getDoctrine()->getManager()->getRepository(Client::class); 

        $clients = $em->findAll(); 
        return $this->json($clients,Response::HTTP_OK);
    }

    public function getOne(int $id, ClientRepository $repository, SerializerInterface $serializer): Response {
        $Client = $repository->find($id);

        if (!$Client) {
            return $this->json(['message' => 'Client not found'], Response::HTTP_NOT_FOUND);
        }
        $serializedClient = $serializer->normalize($Client, null, [
            AbstractNormalizer::ATTRIBUTES => [
                'id',
                'nom',
                'logo',
                'secteur',
                'about'
            ],
        ]);
        return $this->json($serializedClient, Response::HTTP_OK);
    }

    public function addClient(Request $request,
        EntityManagerInterface $entityManager,
        SerializerInterface $serializer,
        ValidatorInterface $validator,
        SluggerInterface $slugger): Response
     {
        $data = $request->request->all();
        $file = $request->files->get('logo');
        $client = $serializer->denormalize($data, Client::class);

        $errors = $validator->validate($client);
        if (count($errors) > 0) {
            return $this->json(['errors' => $errors], Response::HTTP_BAD_REQUEST);
        }
        if ($file) {
            $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFilename = $slugger->slug(new UnicodeString($originalFilename));
            $newFilename = $safeFilename . '-' . uniqid() . '.' . $file->guessExtension();

            try {
                $file->move(
                    $this->getParameter('client_photos_directory'),
                    $newFilename
                );
            } catch (FileException $e) {
                return $this->json(['error' => 'File upload failed'], Response::HTTP_INTERNAL_SERVER_ERROR);
            }

            $client->setLogo($newFilename);
        }
        $entityManager->persist($client);
        $entityManager->flush();

        return $this->json(
            $client,
            Response::HTTP_CREATED,
            [],
            [AbstractNormalizer::GROUPS => 'client']
        );
    }



    /**
     * @Route("/modifierClient/{id}", name="modifierClient")
     */
    public function updateClient(int $id,
        Request $request,
        ClientRepository $repository,
        EntityManagerInterface $entityManager,
        Filesystem $filesystem,
        SerializerInterface $serializer): Response
    {
        $client = $repository->find($id);

        if (!$client) {
            return $this->json(['message' => 'client not found'], Response::HTTP_NOT_FOUND);
        }

        $data = json_decode($request->getContent(), true);
        $newPhoto = $request->files->get('logo');

        // If there is a new photo, delete the previous photo and update the client
        if ($newPhoto) {
            // Get the photo filename and delete the previous photo
            $previousPhoto = $client->getLogo();
            if ($previousPhoto) {
                $photoPath = $this->getParameter('client_photos_directory') . $previousPhoto;
                if ($filesystem->exists($photoPath)) {
                    $filesystem->remove($photoPath);
                }
            }

            // Handle the new file upload
            $newFilename = $this->handleFileUpload($newPhoto);
            $client->setLogo($newFilename);
        }

        // Update the other attributes
        if(isset($data["nom"]) && $data['nom']!=null){
            $client->setNom($data["nom"]);
        }
        if(isset($data["about"]) && $data['about']!=null){
            $client->setAbout($data["about"]);
        }
        if(isset($data["secteur"]) && $data['secteur']!=null){
            $client->setSecteur($data["secteur"]);
        }

        $entityManager->flush();

        return $this->json(['message' => 'client updated'], Response::HTTP_OK);
    }



    /**
     * @Route("/suppressionClient/{id}", name="suppressionClient")
     */

     public function deleteClient(EntityManagerInterface $entityManager, ClientRepository $clientRepository, int $id, Filesystem $filesystem): Response
     {
         $client = $clientRepository->find($id);
     
         if (!$client) {
             throw $this->createNotFoundException('Client introuvable ');
         }
         $photoFilename = $client->getLogo();
         $entityManager->remove($client);
         $entityManager->flush();
         $photoPath = $this->getParameter('client_photos_directory') . $photoFilename;
        if ($filesystem->exists($photoPath)) {
            $filesystem->remove($photoPath);
        }
     
         return $this->json(['message'=>'deleted'],Response::HTTP_OK);
     }
}
