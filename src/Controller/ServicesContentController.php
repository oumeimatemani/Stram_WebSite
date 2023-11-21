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
    
    public function updateContent(int $id,Request $request):Response{
        $data = json_decode($request->getContent(), true);
        $contentId = $id;
        if(!$contentId) return $this->json(['message' => 'content id not found'], Response::HTTP_NOT_FOUND); 
        $content= $this->getDoctrine()->getRepository(ServiceContent::class)->find($contentId);
        if(!$content) return $this->json(['message' => 'content not found'], Response::HTTP_NOT_FOUND);
        $logo = $data['logo'];
        $shortDescription= $data['shortDescription'];
        $detailedDescription=$data['detailedDescription'];
        $AdditionalInformation=$data['AdditionalInformation'];
        $subTitle=$data['subTitle'];
        $phrase=$data['phrase'];
        $caracteristicOne=$data['caracteristicOne'];
        $caracteristicTwo=$data['caracteristicTwo'];
        $caracteristicThree= $data['caracteristicThree'];

        if($logo) $content->setLogo($logo);
        if($shortDescription) $content->setShortDescription($shortDescription);
        if($detailedDescription) $content->setDetailedDescription($detailedDescription);
        if($AdditionalInformation) $content->setAdditionalInformation($AdditionalInformation);
        if($subTitle) $content->setSubTitle($subTitle);
        if($phrase) $content->setPhrase($phrase);
        if($caracteristicOne) $content->setCaracteristicOne($caracteristicOne);
        if($caracteristicTwo) $content->setCaracteristicTwo($caracteristicTwo);
        if($caracteristicThree) $content->setCaracteristicThree($caracteristicThree);
        $this->entityManager->flush();
        return $this->json(['message' => 'content updated'], Response::HTTP_OK);
    }

    public function deleteContent(int $id, Filesystem $filesystem):Response{
        $service=$this->getDoctrine()->getRepository(Service::class)->find($id);
        if(!$service) return $this->json(['message' => 'Servcie not found'], Response::HTTP_NOT_FOUND);
        $content = $service->getContent();
        if(!$content) return $this->json(['message' => 'Content not found'], Response::HTTP_NOT_FOUND);
        // Get the images filename
        $photoFilename1 = $content->getImgOne();
        $photoFilename2 = $content->getImgTwo();
        $photoFilename3 = $content->getImgThree();
        $photoFilename4 = $content->getImgFour();
        $photoFilename5 = $content->getImgFive();
        $photoFilename6 = $content->getImgSix();

        $service->setContent(NULL);
        $content->setService(NULL);
        // Remove the content from the database
        $this->entityManager->remove($content);
        // setServiceContent to null
        
        $this->entityManager->flush();

        // Delete the images file from the server
        $photoPath1 = $this->getParameter('services_content_photo_directory') . $photoFilename1;
        if ($filesystem->exists($photoPath1)) {
            $filesystem->remove($photoPath1);
        }

        $photoPath2 = $this->getParameter('services_content_photo_directory') . $photoFilename2;
        if ($filesystem->exists($photoPath2)) {
            $filesystem->remove($photoPath2);
        }

        $photoPath3 = $this->getParameter('services_content_photo_directory') . $photoFilename3;
        if ($filesystem->exists($photoPath3)) {
            $filesystem->remove($photoPath3);
        }

        $photoPath4 = $this->getParameter('services_content_photo_directory') . $photoFilename4;
        if ($filesystem->exists($photoPath4)) {
            $filesystem->remove($photoPath4);
        }

        $photoPath5 = $this->getParameter('services_content_photo_directory') . $photoFilename5;
        if ($filesystem->exists($photoPath5)) {
            $filesystem->remove($photoPath5);
        }

        $photoPath6 = $this->getParameter('services_content_photo_directory') . $photoFilename6;
        if ($filesystem->exists($photoPath6)) {
            $filesystem->remove($photoPath6);
        }

        return $this->json(['message' => 'Content and associated photo deleted'], Response::HTTP_OK);

    }


}