<?php

namespace App\Controller;

use App\Entity\HomeOne;
use App\Entity\HomeTwo;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;


class AcceuilController extends AbstractController
{
    #[Route("/", name: "getHome1Section", methods: ["GET"])]
    public function getHomeOne(SerializerInterface $serializer): JsonResponse
    {
        $homeOnes = $this->getDoctrine()->getRepository(HomeOne::class)->findOneBy(['id' => 1]);
        return $this->json($homeOnes, Response::HTTP_OK);
    }
/*
    #[Route("/", name: "create", methods: ["POST"])]
    public function create(Request $request, ValidatorInterface $validator, SerializerInterface $serializer): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $homeOne = $serializer->denormalize($data, HomeOne::class);
        
        $errors = $validator->validate($homeOne);
        if (count($errors) > 0) {
            return $this->json(['errors' => (string) $errors], Response::HTTP_BAD_REQUEST);
        }

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($homeOne);
        $entityManager->flush();

        return $this->json($homeOne, Response::HTTP_CREATED);
    }
*/
    #[Route("/homeOne/update", name: "update-home-one", methods: ["PUT", "PATCH"])]
    public function updateHomeOne(Request $request, ValidatorInterface $validator, SerializerInterface $serializer): JsonResponse
{
    // Fetch the HomeOne entity with a fixed id (e.g., id = 1)
    $entityManager = $this->getDoctrine()->getManager();
    $homeOne = $entityManager->getRepository(HomeOne::class)->find(1);

    if (!$homeOne) {
        return $this->json(['message' => 'HomeOne entity with id = 1 not found'], Response::HTTP_NOT_FOUND);
    }

    $data = json_decode($request->getContent(), true);
    $homeOne = $serializer->denormalize($data, HomeOne::class, null, ['object_to_populate' => $homeOne]);

    $errors = $validator->validate($homeOne);
    if (count($errors) > 0) {
        return $this->json(['errors' => (string) $errors], Response::HTTP_BAD_REQUEST);
    }

    $entityManager->flush();

    return $this->json($homeOne, Response::HTTP_OK);
}

    public function getHomeTwo(SerializerInterface $serializer): JsonResponse {
        $homeTwo = $this->getDoctrine()->getRepository(HomeTwo::class)->findOneBy(['id' => 1]);
        return $this->json($homeTwo, Response::HTTP_OK);
    }

    public function updateHomeTwo(Request $request, ValidatorInterface $validator, SerializerInterface $serializer): JsonResponse
    {
        // Fetch the HomeOne entity with a fixed id (e.g., id = 1)
        $entityManager = $this->getDoctrine()->getManager();
        $homeTwo = $entityManager->getRepository(HomeTwo::class)->find(1);

        if (!$homeTwo) {
            return $this->json(['message' => 'homeTwo entity with id = 1 not found'], Response::HTTP_NOT_FOUND);
        }

        $data = json_decode($request->getContent(), true);
        $homeTwo = $serializer->denormalize($data, HomeTwo::class, null, ['object_to_populate' => $homeTwo]);

        $errors = $validator->validate($homeTwo);
        if (count($errors) > 0) {
            return $this->json(['errors' => (string) $errors], Response::HTTP_BAD_REQUEST);
        }

        $entityManager->flush();

        return $this->json($homeTwo, Response::HTTP_OK);
    }
}
