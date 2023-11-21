<?php

namespace App\Controller;

use App\Entity\Service;
use App\Entity\ServiceContent;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use App\Repository\ServiceRepository;
use App\Repository\ServiceContentRepository;
use Psr\Log\LoggerInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\String\UnicodeString;
class ServicesContentController extends AbstractController{
    
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager  )
    {
        $this->entityManager = $entityManager;
    }
    public function getContent(int $id,SerializerInterface $serializer):Response{
        $service=$this->getDoctrine()->getRepository(Service::class)->find($id);
        if(!$service) return $this->json(['message' => 'Servcie not found'], Response::HTTP_NOT_FOUND);
        $content = $service->getContent();
        if(!$content) return $this->json(['message' => 'Content not found'], Response::HTTP_NOT_FOUND);
        $serializedContent = $serializer->normalize($content, null, [
            AbstractNormalizer::ATTRIBUTES => [
                'id',
                'serviceName',
                'logo',
                'imgOne',
                'imgTwo',
                'imgThree',
                'imgFour',
                'imgFive',
                'imgSix',
                'shortDescription',
                'detailedDescription',
                'AdditionalInformation',
                'subTitle',
                'phrase',
                'caracteristicOne',
                'caracteristicTwo',
                'caracteristicThree'
            ],
        ]);
        $serviceName= $service->getName();
        $serializedContent['serviceName'] = $serviceName;
        $serializedContent['AdditionalInformation']= $content->getAdditionalInformation();
        return $this->json($serializedContent, Response::HTTP_OK);
    }
    public function createContent(Request $request,SerializerInterface $serializer,ValidatorInterface $validator , SluggerInterface $slugger):Response{
        $data = $request->request->all();
        $serviceId = $data['serviceId'];
        $service = $this->getDoctrine()->getRepository(Service::class)->find($serviceId);
        $content = $serializer->denormalize($data, ServiceContent::class);
        $file1 = $request->files->get('imgOne');
        $file2 = $request->files->get('imgTwo');
        $file3 = $request->files->get('imgThree');
        $file4 = $request->files->get('imgFour');
        $file5 = $request->files->get('imgFive');
        $file6 = $request->files->get('imgSix');

        $errors = $validator->validate($content);
        if (count($errors) > 0) {
            return $this->json(['errors' => $errors], Response::HTTP_BAD_REQUEST);
        }
        if ($file1){
            $newFilename1 = $this->handleImage($file1,$slugger);
            $content->setImgOne($newFilename1);
        }
        
        if ($file2){
            $newFilename2 = $this->handleImage($file2,$slugger);
            $content->setImgTwo($newFilename2);
        }
        
        if ($file3){
            $newFilename3 = $this->handleImage($file3,$slugger);
            $content->setImgThree($newFilename3);
        }
        
        if ($file4){
            $newFilename4 = $this->handleImage($file4,$slugger);
            $content->setImgFour($newFilename4);
        }
       
        if ($file5){
            $newFilename5 = $this->handleImage($file5,$slugger);
            $content->setImgFive($newFilename5);
        }
        
        if ($file6){
            $newFilename6 = $this->handleImage($file6,$slugger);
            $content->setImgSix($newFilename6);
        }
        
        $content->setService($service);
        $service->setContent($content);

        $this->entityManager->persist($content);
        $this->entityManager->flush();

        return $this->json(
            $content,
            Response::HTTP_CREATED,
            [],
            [AbstractNormalizer::GROUPS => 'service_content']
        );

    }

    public function handleImage(UploadedFile $file ,  SluggerInterface $slugger ){
        
            $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFilename = $slugger->slug(new UnicodeString($originalFilename));
            $newFilename = $safeFilename . '-' . uniqid() . '.' . $file->guessExtension();

            try {
                $file->move(
                    $this->getParameter('services_content_photo_directory'),
                    $newFilename
                );
            } catch (FileException $e) {
                return $this->json(['error' => 'File upload failed'], Response::HTTP_INTERNAL_SERVER_ERROR);
            }
            return $newFilename;
        
    }


}