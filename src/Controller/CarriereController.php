<?php

namespace App\Controller;

use App\Entity\Carriere;
use App\Entity\Job;  
use App\DTO\JobDTO;
use App\Repository\CarriereRepository;
use App\Repository\JobRepository;
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
    public function getApplicationsByJobOffer(int $id,
     JobRepository $jobRepository,
     CarriereRepository $repository,
     SerializerInterface $serializer): Response {
        $job = $jobRepository->find($id);
        if (!$job) {
            return new Response('Job not found', Response::HTTP_NOT_FOUND);
        }
    
        
        $career = $repository->findByJob($id);
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

    public function getAllJobOffers(JobRepository $repository, SerializerInterface $serializer){
        $jobs= $repository->findAll();
        
        $serializedJobs = $serializer->normalize($jobs, null, [
            AbstractNormalizer::ATTRIBUTES => [
                'id',
                'title',
                'ref',
                'isHide',
                'description',
                'shortDescription',
            ],
        ]);
        
        return $this->json($serializedJobs, Response::HTTP_OK);
    }

    public function getOneJob(int $id,JobRepository $repository , SerializerInterface $serializer): Response
    {
        $job = $repository->find($id);
        if (!$job) {
            return $this->json(['status' => 'error, job not found!'], Response::HTTP_NOT_FOUND);
        }
        $serializedJobs = $serializer->normalize($job, null, [
            AbstractNormalizer::ATTRIBUTES => [
                'id',
                'title',
                'ref',
                'description',
                'shortDescription',
                'requirment1',
                'requirment2',
                'requirment3',
                'requirment4',
                'requirment5',
            ],
        ]);
        return $this->json($serializedJobs);
    }

    public function createJob(Request $request): Response
    {
        $data = json_decode($request->getContent(), true);
        $job = new Job();
        if ( !isset($data['title']) ||  !isset($data['shortDescription']) || !isset($data['description']) ) {
            return $this->json(['status' => 'erreur, verify required fields!'], Response::HTTP_BAD_REQUEST);
        }
        $shortDescription = $data['shortDescription'];
        $title = $data['title'];
        $description = $data['description']; 
        $job->setShortDescription($shortDescription);
        $job->setTitle($title);
        $job->setDescription($description);
        if(isset($data['ref'])) {$ref= $data['ref']; $job->setRef($ref); }
        if(isset($data['requirment1'])) {$requirment1= $data['requirment1']; $job->setRequirment1($requirment1); }
        if(isset($data['requirment2'])) {$requirment2= $data['requirment2']; $job->setRequirment2($requirment2); }
        if(isset($data['requirment3'])) {$requirment3= $data['requirment3']; $job->setRequirment3($requirment3); }
        if(isset($data['requirment4'])) {$requirment4= $data['requirment4']; $job->setRequirment4($requirment4); }
        if(isset($data['requirment5'])) {$requirment5= $data['requirment5']; $job->setRequirment5($requirment5); }
        $em = $this->getDoctrine()->getManager();
        $em->persist($job);
        $em->flush();
        return $this->json(['status' => 'job created!'], Response::HTTP_CREATED);
   }

   public function hideJob(Request $request,int $id , JobRepository $repository):Response{
        $job = $repository->find($id);
        $data = json_decode($request->getContent(), true);
        if(!$job){
            return $this->json(['status' => 'error, job not found!'], Response::HTTP_NOT_FOUND);
        }
        if (isset($data['isHide'])) {
            if($data['isHide'] == true)
            $job->setIsHide(true);
            else if ($data['isHide'] == false)
            $job->setIsHide(false);
            $em = $this->getDoctrine()->getManager();
            $em->flush();
        }
        return $this->json(['message'=>'updated!'], Response::HTTP_OK);
   }


   public function updateJob(Request $request, int $id,JobRepository $repository): Response
   {
        $data = json_decode($request->getContent(), true);
        $em = $this->getDoctrine()->getManager();
        $job = $repository->find($id);

        if (!$job) {
            return $this->json(['status' => 'error, job not found!'], Response::HTTP_NOT_FOUND);
        }

        if (isset($data['title'])) {
            $job->setTitle($data['title']);
        }

        if (isset($data['shortDescription'])) {
            $job->setShortDescription($data['shortDescription']);
        }

        if (isset($data['description'])) {
            $job->setDescription($data['description']);
        }

        if (isset($data['ref'])) {
            $job->setRef($data['ref']);
        }

        if (isset($data['requirment1'])) {
            $job->setRequirment1($data['requirment1']);
        }

        if (isset($data['requirment2'])) {
            $job->setRequirment2($data['requirment2']);
        }

        if (isset($data['requirment3'])) {
            $job->setRequirment3($data['requirment3']);
        }

        if (isset($data['requirment4'])) {
            $job->setRequirment4($data['requirment4']);
        }

        if (isset($data['requirment5'])) {
            $job->setRequirment5($data['requirment5']);
        }

        $em->flush();

        return $this->json(['status' => 'job updated!'], Response::HTTP_OK);
   }


    public function createSpontaneousCareer(Request $request, 
        SerializerInterface $serializer,
        ValidatorInterface $validator,
        SluggerInterface $slugger,
        CarriereRepository $carriereRepository): Response
     {
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

    public function createCandidateByJobOffer(
        int $id,
        Request $request, 
        SerializerInterface $serializer,
        ValidatorInterface $validator,
        SluggerInterface $slugger,
        JobRepository $jobRepository,
        CarriereRepository $carriereRepository): Response
     {
        $job = $jobRepository->find($id);
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
        $career->setJob($job);
        // Set isPosteOffer to null
        $career->setIsPosteOffer(true);

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
