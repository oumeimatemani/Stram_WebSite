<?php

namespace App\Controller;

use App\Entity\HomeOne;
use App\Entity\HomeTwo;
use App\Entity\Service;
use App\DTO\HomeOneDTO;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;


class AcceuilController extends AbstractController
{
    public function getHomeOne(SerializerInterface $serializer): JsonResponse
    {
        $homeOne = $this->getDoctrine()->getRepository(HomeOne::class)->findOneBy(['id' => 1]);
        $service1Name = $homeOne->getService1()->getName();
        $service2Name = $homeOne->getService2()->getName();
        $service3Name = $homeOne->getService3()->getName();
        $service1Id = $homeOne->getService1()->getId();
        $service2Id = $homeOne->getService2()->getId();
        $service3Id = $homeOne->getService3()->getId();
        $homeOneDTO = new HomeOneDTO(
            $homeOne->getId(),
            $homeOne->getBigTitle(),
            $homeOne->getSubDescription(),
            $homeOne->getSecondBigTitle(),
            $homeOne->getOrangeTitle(),
            $homeOne->getSecondSubDescription(),
            $homeOne->getSmallTitle(),
            $homeOne->getSmallDescription(),
            $homeOne->getSecondSmallTitle(),
            $homeOne->getSecondSmallDescription(),
            $service1Id,$service2Id,$service3Id,
            $service1Name,$service2Name,$service3Name
        );
         // Serialize the DTO to JSON
        $serializedData = $serializer->serialize($homeOneDTO->toArray(), 'json');
        
        return new JsonResponse($serializedData,  Response::HTTP_OK, [], true);
    }

    public function updateHomeOne(Request $request, ValidatorInterface $validator, SerializerInterface $serializer): JsonResponse
{
    // Fetch the HomeOne entity with a fixed id (e.g., id = 1)
    $entityManager = $this->getDoctrine()->getManager();
    $homeOne = $entityManager->getRepository(HomeOne::class)->find(1);

    if (!$homeOne) {
        return $this->json(['message' => 'HomeOne entity with id = 1 not found'], Response::HTTP_NOT_FOUND);
    }

    $data = json_decode($request->getContent(), true);
    
   // $homeOne = $serializer->denormalize($data, HomeOne::class, null, ['object_to_populate' => $homeOne]);
    if(isset($data['service1'])  && $data['service1'] != null  && $data['service1'] != ""){
        $serviceOneId= intval( $data['service1']);
        $service1 = $this->getDoctrine()->getRepository(Service::class)->find($serviceOneId);
        $homeOne->setService1($service1);
    }
    if(isset($data['service2']) && $data['service2'] != null &&  $data['service2'] !=""){
        $service2Id= intval($data['service2']);
        $service2 = $this->getDoctrine()->getRepository(Service::class)->find($service2Id);
        $homeOne->setService2($service2);
    }
    if(isset($data['service3']) && $data['service3'] != null &&  $data['service3'] !=""){
        $serviceThreeId= intval($data['service3']);
        $service3 = $this->getDoctrine()->getRepository(Service::class)->find($serviceThreeId);
        $homeOne->setService3($service3);
    }
    $errors = $validator->validate($homeOne);
    if (count($errors) > 0) {
        return $this->json(['errors' => (string) $errors], Response::HTTP_BAD_REQUEST);
    }
    if(isset($data['bigTitle'])){
        $bigTitle  = $data['bigTitle'];
        $homeOne->setBigTitle($bigTitle);
    }
    if(isset($data['subDescription'])){
        $subDescription  = $data['subDescription'];
        $homeOne->setSubDescription($subDescription);
    }
    if(isset($data['SecondBigTitle'])){
        $SecondBigTitle  = $data['SecondBigTitle'];
        $homeOne->setSecondBigTitle($SecondBigTitle);
    }
    if(isset($data['orangeTitle'])){
        $orangeTitle  = $data['orangeTitle'];
        $homeOne->setorangeTitle($orangeTitle);
    }
    if(isset($data['secondSubDescription'])){
        $secondSubDescription  = $data['secondSubDescription'];
        $homeOne->setSecondSubDescription($secondSubDescription);
    }
    if(isset($data['smallTitle'])){
        $smallTitle  = $data['smallTitle'];
        $homeOne->setSmallTitle($smallTitle);
    }
    if(isset($data['smallDescription'])){
        $smallDescription  = $data['smallDescription'];
        $homeOne->setSmallDescription($smallDescription);
    }
    if(isset($data['secondSmallTitle'])){
        $secondSmallTitle  = $data['secondSmallTitle'];
        $homeOne->setSecondSmallTitle($secondSmallTitle);
    }
    if(isset($data['secondSmallDescription'])){
        $secondSmallDescription  = $data['secondSmallDescription'];
        $homeOne->setSecondSmallDescription($secondSmallDescription);
    }

    $entityManager->flush();

    return $this->json("UPDATED ", Response::HTTP_OK);
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
