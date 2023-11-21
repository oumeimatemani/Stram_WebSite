<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\ClientTestimonial;
use App\Repository\ClientTestimonialRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Component\Validator\Validator\ValidatorInterface;

use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\String\UnicodeString;
use Symfony\Component\Filesystem\Filesystem;
class TestimonialController extends AbstractController
{
    public function createClientTestimonial(
        Request $request,
        EntityManagerInterface $entityManager,
        SerializerInterface $serializer,
        ValidatorInterface $validator,
        SluggerInterface $slugger
    ): Response {
        $data = $request->request->all();
        $file = $request->files->get('photo');
        $data['rating'] = intval($data['rating']);

        $clientTestimonial = $serializer->denormalize($data, ClientTestimonial::class);

        $errors = $validator->validate($clientTestimonial);
        if (count($errors) > 0) {
            return $this->json(['errors' => $errors], Response::HTTP_BAD_REQUEST);
        }

        if ($file) {
            $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFilename = $slugger->slug(new UnicodeString($originalFilename));
            $newFilename = $safeFilename . '-' . uniqid() . '.' . $file->guessExtension();

            try {
                $file->move(
                    $this->getParameter('client_testimonial_photos_directory'),
                    $newFilename
                );
            } catch (FileException $e) {
                return $this->json(['error' => 'File upload failed'], Response::HTTP_INTERNAL_SERVER_ERROR);
            }

            $clientTestimonial->setPhoto($newFilename);
        }
        $entityManager->persist($clientTestimonial);
        $entityManager->flush();

        return $this->json(
            $clientTestimonial,
            Response::HTTP_CREATED,
            [],
            [AbstractNormalizer::GROUPS => 'client_testimonial']
        );
    }

    public function getAll(ClientTestimonialRepository $repository, SerializerInterface $serializer): Response {
        $clientTestimonials = $repository->findAll();

        // Serialize the results to include the full path of the photo
        $serializedClientTestimonials = $serializer->normalize($clientTestimonials, null, [
            AbstractNormalizer::ATTRIBUTES => [
                'id',
                'rating',
                'message',
                'fullname',
                'country',
                'photo'
            ],
        ]);

        // Add the full path to the 'photo' field
        /*
        $serializedClientTestimonials = array_map(function($testimonial) {
            $testimonial['photo'] = $this->getParameter('client_testimonial_photos_directory') . $testimonial['photo'];
            return $testimonial;
        }, $serializedClientTestimonials);
        */
        return $this->json($serializedClientTestimonials, Response::HTTP_OK);
    }

    public function getTestimonialById(int $id, ClientTestimonialRepository $repository, SerializerInterface $serializer): Response {
        $testimonial = $repository->find($id);

        if (!$testimonial) {
            return $this->json(['message' => 'Testimonial not found'], Response::HTTP_NOT_FOUND);
        }

        // Serialize the testimonial to include the full path of the photo
        $serializedTestimonial = $serializer->normalize($testimonial, null, [
            AbstractNormalizer::ATTRIBUTES => [
                'id',
                'rating',
                'message',
                'fullname',
                'country',
            ],
        ]);

        // Add the full path to the 'photo' field
       // $serializedTestimonial['photo'] = $this->getParameter('client_testimonial_photos_directory') . $serializedTestimonial['photo'];

        return $this->json($serializedTestimonial, Response::HTTP_OK);
    }

    public function updateTestimonial(
        int $id,
        Request $request,
        ClientTestimonialRepository $repository,
        EntityManagerInterface $entityManager,
        Filesystem $filesystem,
        SerializerInterface $serializer
    ): Response {
        $testimonial = $repository->find($id);

        if (!$testimonial) {
            return $this->json(['message' => 'Testimonial not found'], Response::HTTP_NOT_FOUND);
        }

        $data = json_decode($request->getContent(), true);
        $newPhoto = $request->files->get('photo');

        // If there is a new photo, delete the previous photo and update the testimonial
        if ($newPhoto) {
            // Get the photo filename and delete the previous photo
            $previousPhoto = $testimonial->getPhoto();
            if ($previousPhoto) {
                $photoPath = $this->getParameter('client_testimonial_photos_directory') . $previousPhoto;
                if ($filesystem->exists($photoPath)) {
                    $filesystem->remove($photoPath);
                }
            }

            // Handle the new file upload
            $newFilename = $this->handleFileUpload($newPhoto);
            $testimonial->setPhoto($newFilename);
        }

        // Update the other attributes
        $serializer->deserialize(json_encode($data), ClientTestimonial::class, 'json', [AbstractNormalizer::OBJECT_TO_POPULATE => $testimonial]);

        $entityManager->flush();

        return $this->json(['message' => 'Testimonial updated'], Response::HTTP_OK);
    }

    private function handleFileUpload($file) {
        $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $slugger = new SluggerInterface();
        $safeFilename = $slugger->slug(new UnicodeString($originalFilename));
        $newFilename = $safeFilename . '-' . uniqid() . '.' . $file->guessExtension();

        $file->move(
            $this->getParameter('client_testimonial_photos_directory'),
            $newFilename
        );

        return $newFilename;
    }

    public function deleteById(int $id, ClientTestimonialRepository $repository, EntityManagerInterface $entityManager, Filesystem $filesystem): Response {
        $testimonial = $repository->find($id);

        if (!$testimonial) {
            return $this->json(['message' => 'Testimonial not found'], Response::HTTP_NOT_FOUND);
        }

        // Get the photo filename
        $photoFilename = $testimonial->getPhoto();

        // Remove the testimonial from the database
        $entityManager->remove($testimonial);
        $entityManager->flush();

        // Delete the photo file from the server
        $photoPath = $this->getParameter('client_testimonial_photos_directory') . $photoFilename;
        if ($filesystem->exists($photoPath)) {
            $filesystem->remove($photoPath);
        }

        return $this->json(['message' => 'Testimonial and associated photo deleted'], Response::HTTP_OK);
    }
}
