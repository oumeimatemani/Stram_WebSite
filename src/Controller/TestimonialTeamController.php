<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\TeamTestimonial;
use App\Repository\TeamTestimonialRepository;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Component\Validator\Validator\ValidatorInterface;

use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\String\UnicodeString;
use Symfony\Component\Filesystem\Filesystem;

class TestimonialTeamController extends AbstractController{

    public function createTeamTestimonial(
        Request $request,
        SerializerInterface $serializer,
        ValidatorInterface $validator,
        SluggerInterface $slugger
    ): Response {
        $entityManager = $this->getDoctrine()->getManager();
        $data = $request->request->all();
        $file = $request->files->get('photo');

        $teamTestimonial = $serializer->denormalize($data, TeamTestimonial::class);

        $errors = $validator->validate($teamTestimonial);
        if (count($errors) > 0) {
            return $this->json(['errors' => $errors], Response::HTTP_BAD_REQUEST);
        }

        if ($file) {
            $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFilename = $slugger->slug(new UnicodeString($originalFilename));
            $newFilename = $safeFilename . '-' . uniqid() . '.' . $file->guessExtension();

            try {
                $file->move(
                    $this->getParameter('team_testimonial_photos_directory'),
                    $newFilename
                );
            } catch (FileException $e) {
                return $this->json(['error' => 'File upload failed'], Response::HTTP_INTERNAL_SERVER_ERROR);
            }

            $teamTestimonial->setPhoto($newFilename);
        }
        $entityManager->persist($teamTestimonial);
        $entityManager->flush();

        return $this->json(
            $teamTestimonial,
            Response::HTTP_CREATED,
            [],
            [AbstractNormalizer::GROUPS => 'team_testimonial']
        );
    }
    public function getAll(TeamTestimonialRepository $repository, SerializerInterface $serializer): Response {
        $teamTestimonials = $repository->findAll();

        $serializedTeamTestimonials = $serializer->normalize($teamTestimonials, null, [
            AbstractNormalizer::ATTRIBUTES => [
                'id',
                'message',
                'fullname',
                'position',
                'photo'
            ],
        ]);
        return $this->json($serializedTeamTestimonials, Response::HTTP_OK);
    }

    public function getTeamTestimonialById(int $id, TeamTestimonialRepository $repository, SerializerInterface $serializer): Response {
        $testimonial = $repository->find($id);

        if (!$testimonial) {
            return $this->json(['message' => 'Team testimonial not found'], Response::HTTP_NOT_FOUND);
        }
        $serializedTestimonial = $serializer->normalize($testimonial, null, [
            AbstractNormalizer::ATTRIBUTES => [
                'id',
                'message',
                'fullname',
                'position',
            ],
        ]);
        return $this->json($serializedTestimonial, Response::HTTP_OK);
    }

    public function updateTeamTestimonial(
        int $id,
        Request $request,
        TeamTestimonialRepository $repository,
        EntityManagerInterface $entityManager,
        Filesystem $filesystem,
        SerializerInterface $serializer
    ): Response {
        $testimonial = $repository->find($id);

        if (!$testimonial) {
            return $this->json(['message' => 'Team testimonial not found'], Response::HTTP_NOT_FOUND);
        }

        $data = json_decode($request->getContent(), true);
        $newPhoto = $request->files->get('photo');
        if ($newPhoto) {
            $previousPhoto = $testimonial->getPhoto();
            if ($previousPhoto) {
                $photoPath = $this->getParameter('team_testimonial_photos_directory') . $previousPhoto;
                if ($filesystem->exists($photoPath)) {
                    $filesystem->remove($photoPath);
                }
            }
            $newFilename = $this->handleFileUpload($newPhoto);
            $testimonial->setPhoto($newFilename);
        }

        if(isset($data["fullname"]) && $data['fullname']!=null){
            $testimonial->setFullname($data["fullname"]);
        }
        if(isset($data["message"]) && $data['message']!=null){
            $testimonial->setMessage($data["message"]);
        }
        if(isset($data["position"]) && $data['position']!=null){
            $testimonial->setPosition($data["position"]);
        }

        $entityManager->flush();

        return $this->json(['message' => 'Team Testimonial updated'], Response::HTTP_OK);
    }

    private function handleFileUpload($file) {
        $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $slugger = new SluggerInterface();
        $safeFilename = $slugger->slug(new UnicodeString($originalFilename));
        $newFilename = $safeFilename . '-' . uniqid() . '.' . $file->guessExtension();

        $file->move(
            $this->getParameter('team_testimonial_photos_directory'),
            $newFilename
        );
        return $newFilename;
    }

    public function deleteById(int $id, TeamTestimonialRepository $repository, EntityManagerInterface $entityManager, Filesystem $filesystem): Response {
        $testimonial = $repository->find($id);
        if (!$testimonial) {
            return $this->json(['message' => 'Team Testimonial not found'], Response::HTTP_NOT_FOUND);
        }
        $photoFilename = $testimonial->getPhoto();

        $entityManager->remove($testimonial);
        $entityManager->flush();

        $photoPath = $this->getParameter('team_testimonial_photos_directory') . $photoFilename;
        if ($filesystem->exists($photoPath)) {
            $filesystem->remove($photoPath);
        }
        return $this->json(['message' => 'Team Testimonial and associated photo deleted'], Response::HTTP_OK);
    }


}