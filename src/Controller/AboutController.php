<?php
namespace App\Controller;

use App\Entity\About;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\SerializerInterface;


class AboutController extends AbstractController{

    public function getAboutStram(SerializerInterface $serializer): JsonResponse{
        $about = $this->getDoctrine()->getRepository(About::class)->findOneBy(['id' => 1]);
        if (!$about) return $this->json(['message' => 'HomeOne entity with id = 1 not found'], Response::HTTP_NOT_FOUND);
        $serializedData = $serializer->serialize($about, 'json');
        return new JsonResponse($serializedData,  Response::HTTP_OK, [], true);
    }
    
    public function updateAboutStram(Request $request, ValidatorInterface $validator, SerializerInterface $serializer): JsonResponse{
        $entityManager = $this->getDoctrine()->getManager();
        $about = $entityManager->getRepository(About::class)->find(1);
        if (!$about) return $this->json(['message' => 'HomeOne entity with id = 1 not found'], Response::HTTP_NOT_FOUND);
    
        $data = json_decode($request->getContent(), true);
        if(isset($data['introduction'])){
            $introduction = $data['introduction'];
            $about->setIntroduction($introduction);
        }
        if(isset($data['title'])){
            $title = $data['title'];
            $about->setTitle($title);
        }
        if(isset($data['description'])){
            $description = $data['description'];
            $about->setDescription($description);
        }
        if(isset($data['mission'])){
            $mission  = $data['mission'];
            $about->setMission($mission);
        }
        if(isset($data['ourValue'])){
            $ourValue  = $data['ourValue'];
            $about->setOurValue($ourValue);
        }
    
        $entityManager->flush();
    
        return $this->json("UPDATED ", Response::HTTP_OK);
    }

}