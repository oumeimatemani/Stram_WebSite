<?php

namespace App\Controller;

use App\Entity\Carriere; 
use App\Repository\CarriereRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\String\UnicodeString;
use Symfony\Component\Filesystem\Filesystem;
class CarriereController extends AbstractController
{
    public function getAllSpontanious(CarriereRepository $repository, SerializerInterface $serializer): Response {
        $career = $repository->findAllWithFalsePosteOffer();

        // Serialize the results to include the full path of the photo
        $serializedCareer = $serializer->normalize($career, null, [
            AbstractNormalizer::ATTRIBUTES => [
                'id',
                'name',
                'mail',
                'cv',
                'motivationLetter',
                'message'
            ],
        ]);
        return $this->json($serializedCareer, Response::HTTP_OK);
    }

    public function createSpontaneousCareer(Request $request, 
        SerializerInterface $serializer,
        ValidatorInterface $validator,
        SluggerInterface $slugger,
     CarriereRepository $carriereRepository): Response
     {
        // Get data from the request sent by Angular
        $data = $request->request->all();
        
        $cv = $request->files->get('cv');
        $letter = $request->files->get('motivationLetter');
        $career = new Carriere();
        if ($cv) {
            $originalFilename = pathinfo($cv->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFilename = $slugger->slug(new UnicodeString($originalFilename));
            $newFilename = $safeFilename . '-' . uniqid() . '.' . $cv->guessExtension();

            try {
                $cv->move(
                    $this->getParameter('candidate_cv_directory'),
                    $newFilename
                );
            } catch (FileException $e) {
                return $this->json(['error' => 'File upload failed'], Response::HTTP_INTERNAL_SERVER_ERROR);
            }

            $career->setCv($newFilename);
        }
        if ($letter) {
            $originalFilename2 = pathinfo($letter->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFilename2 = $slugger->slug(new UnicodeString($originalFilename2));
            $newFilename2 = $safeFilename2 . '-' . uniqid() . '.' . $letter->guessExtension();

            try {
                $letter->move(
                    $this->getParameter('candidate_letter_directory'),
                    $newFilename2
                );
            } catch (FileException $e) {
                return $this->json(['error' => 'File upload failed'], Response::HTTP_INTERNAL_SERVER_ERROR);
            }

            $career->setMotivationLetter($newFilename2);
        }

        $career->setName($data['name']);
        $career->setMail($data['mail']);
        $career->setMessage($data['message']);

        // Set isPosteOffer to null
        $career->setIsPosteOffer(false);

        // Persist the new Carriere entity
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($career);
        $entityManager->flush();

        // Serialize the created career for the response
        $serializedCareer = $serializer->normalize($career, null, [
            AbstractNormalizer::ATTRIBUTES => [
                'id',
                'name',
                'mail',
                'cv',
                'motivationLetter',
                'message'
            ],
        ]);

        return $this->json($serializedCareer, Response::HTTP_CREATED);
    }

    public function getCarriereById(int $id, CarriereRepository $carriereRepository, SerializerInterface $serializer): Response
    {
        $carriere = $carriereRepository->find($id);

        if (!$carriere) {
            throw new NotFoundHttpException('Carriere not found');
        }

        $serializedCarriere = $serializer->normalize($carriere, null, [
            AbstractNormalizer::ATTRIBUTES => [
                'id',
                'name',
                'mail',
                'cv',
                'motivationLetter',
                'message'
            ],
        ]);

        return $this->json($serializedCarriere, Response::HTTP_OK);
    }



    public function updateCarriere(int $id, Request $request, CarriereRepository $carriereRepository, SerializerInterface $serializer): Response
    {
        $carriere = $carriereRepository->find($id);

        if (!$carriere) {
            throw $this->createNotFoundException('Carriere not found');
        }

        // Get updated data from the request
        $data = json_decode($request->getContent(), true);

        // Update Carriere properties if they are present in the request data
        if (isset($data['name'])) {
            $carriere->setName($data['name']);
        }

        if (isset($data['mail'])) {
            $carriere->setMail($data['mail']);
        }

        if (isset($data['cv'])) {
            $carriere->setCv($data['cv']);
        }

        if (isset($data['motivationLetter'])) {
            $carriere->setMotivationLetter($data['motivationLetter']);
        }

        if (isset($data['message'])) {
            $carriere->setMessage($data['message']);
        }

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->flush();

        $serializedCarriere = $serializer->normalize($carriere, null, [
            AbstractNormalizer::ATTRIBUTES => [
                'id',
                'name',
                'mail',
                'cv',
                'motivationLetter',
                'message'
            ],
        ]);

        return $this->json($serializedCarriere, Response::HTTP_OK);
    }



    public function deleteSpontanious(int $id, CarriereRepository $carriereRepository,  Filesystem $filesystem): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $carriere = $carriereRepository->find($id);

        if (!$carriere) {
            throw $this->createNotFoundException('Carriere not found');
        }
        $cvFilename = $carriere->getCv();
        $letterFilename = $carriere->getMotivationLetter();
        $cvPath = $this->getParameter('candidate_cv_directory') . $cvFilename;
        $entityManager->remove($carriere);
        $entityManager->flush();
        if ($filesystem->exists($cvPath)) {
            $filesystem->remove($cvPath);
        }
        if($letterFilename){
            $letterPath = $this->getParameter('candidate_letter_directory') . $letterFilename;
        if ($filesystem->exists($letterPath)) {
            $filesystem->remove($letterPath);
        }
        }
        return $this->json(['message' => 'Candidate and associated cv deleted'], Response::HTTP_OK);
    }

    

}
