<?php

namespace App\Controller;
use App\Entity\Partner;
use App\Repository\PartnerRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\String\UnicodeString;
use Symfony\Component\Filesystem\Filesystem;
class PartnerController extends AbstractController
{
    public function getPartner(PartnerRepository $repository, SerializerInterface $serializer): Response {
        $Partner = $repository->findAll();
        $serializedPartner = $serializer->normalize($Partner, null, [
            AbstractNormalizer::ATTRIBUTES => [
                'id',
                'name',
                'logo'
            ],
        ]);
        return $this->json($serializedPartner, Response::HTTP_OK);
    }

    public function getPartnerById(int $id, PartnerRepository $repository, SerializerInterface $serializer): Response {
        $Partner = $repository->find($id);

        if (!$Partner) {
            return $this->json(['message' => 'Partner not found'], Response::HTTP_NOT_FOUND);
        }
        $serializedPartner = $serializer->normalize($Partner, null, [
            AbstractNormalizer::ATTRIBUTES => [
                'id',
                'name',
                'logo',
            ],
        ]);
        return $this->json($serializedPartner, Response::HTTP_OK);
    }

    public function createPartner(
        Request $request,
        SerializerInterface $serializer,
        ValidatorInterface $validator,
        SluggerInterface $slugger
    ): Response {
        $entityManager = $this->getDoctrine()->getManager();
        $data = $request->request->all();
        $file = $request->files->get('logo');
        $Partner = $serializer->denormalize($data, Partner::class);

        $errors = $validator->validate($Partner);
        if (count($errors) > 0) {
            return $this->json(['errors' => $errors], Response::HTTP_BAD_REQUEST);
        }

        if ($file) {
            $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFilename = $slugger->slug(new UnicodeString($originalFilename));
            $newFilename = $safeFilename . '-' . uniqid() . '.' . $file->guessExtension();

            try {
                $file->move(
                    $this->getParameter('partner_photos_directory'),
                    $newFilename
                );
            } catch (FileException $e) {
                return $this->json(['error' => 'File upload failed'], Response::HTTP_INTERNAL_SERVER_ERROR);
            }

            $Partner->setLogo($newFilename);
        }
        $entityManager->persist($Partner);
        $entityManager->flush();

        return $this->json(
            $Partner,
            Response::HTTP_CREATED,
            [],
        );
    }

    public function updatePartner(
        int $id,
        Request $request,
        PartnerRepository $repository,
        Filesystem $filesystem,
        SerializerInterface $serializer
    ): Response {
        $entityManager = $this->getDoctrine()->getManager();
        $Partner = $repository->find($id);

        if (!$Partner) {
            return $this->json(['message' => 'Partner not found'], Response::HTTP_NOT_FOUND);
        }

        $data = json_decode($request->getContent(), true);
        $newLogo = $request->files->get('logo');

        if ($newLogo) {
            $previousLogo = $Partner->getLogo();
            if ($previousLogo) {
                $logoPath = $this->getParameter('client_Partner_photos_directory') . $previousLogo;
                if ($filesystem->exists($logoPath)) {
                    $filesystem->remove($logoPath);
                }
            }

            $newFilename = $this->handleFileUpload($newLogo);
            $Partner->setLogo($newFilename);
        }

        if(isset($data["name"]) && $data['name']!=null){
            $Partner->setName($data["name"]);
        }
        $entityManager->flush();

        return $this->json(['message' => 'Partner updated'], Response::HTTP_OK);
    }

    private function handleFileUpload($file) {
        $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $slugger = new SluggerInterface();
        $safeFilename = $slugger->slug(new UnicodeString($originalFilename));
        $newFilename = $safeFilename . '-' . uniqid() . '.' . $file->guessExtension();

        $file->move(
            $this->getParameter('partner_photos_directory'),
            $newFilename
        );

        return $newFilename;
    }


    public function deletePartnerById(int $id, PartnerRepository $repository, Filesystem $filesystem): Response {
        $Partner = $repository->find($id);
        $entityManager = $this->getDoctrine()->getManager();

        if (!$Partner) {
            return $this->json(['message' => 'Partner not found'], Response::HTTP_NOT_FOUND);
        }

        $photoFilename = $Partner->getLogo();

        $entityManager->remove($Partner);
        $entityManager->flush();

        $photoPath = $this->getParameter('partner_photos_directory') . $photoFilename;
        if ($filesystem->exists($photoPath)) {
            $filesystem->remove($photoPath);
        }

        return $this->json(['message' => 'Partner and associated photo deleted'], Response::HTTP_OK);
    }
}
