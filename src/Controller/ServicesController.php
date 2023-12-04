<?php

namespace App\Controller;

use App\Entity\Service;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Component\Serializer\SerializerInterface;
use App\Repository\ServiceRepository;
use Psr\Log\LoggerInterface;
use Doctrine\ORM\EntityManagerInterface;

class ServicesController extends AbstractController
{
   

    public function getServices(): JsonResponse
    {
        $services = $this->getDoctrine()->getRepository(Service::class)->findServicesWithNullService_id();
        $result = [];
        foreach ($services as $service) {
            $result[] = $this->serializeService($service);
        }
        return $this->json($result, Response::HTTP_OK);
    }

    /**
     * Serialize a service and its sub-services recursively.
     *
     * @param Service $service
     * @return array
     */
    private function serializeService(Service $service): array
    {
        $hasContent = false;
            if($service->getContent() != null) $hasContent = true;
        $hasSubService = $service->getSubServices()->count() > 0;
        $serviceData = [
            'id' => $service->getId(),
            'name' => $service->getName(),
            'orderInList' => $service->getOrderInList(),
            'hasSubService' => $hasSubService,
            'hasContent' => $hasContent,
            'subServices' => [],
        ];

        foreach ($service->getSubServices() as $subService) {
            $serviceData['subServices'][] = $this->serializeService($subService);
        }

        return $serviceData;
    }

    public function getAllServices(): JsonResponse{
        $services = $this->getDoctrine()->getRepository(Service::class)->findAll();
        foreach($services as $service){
            $hasContent = false;
            if($service->getContent() != null){ $hasContent = true;}
            $serviceData = [
                'id' => $service->getId(),
                'name' => $service->getName(),
                'hasContent' => $hasContent
            ];
            $result[] = $serviceData;
        }
        return $this->json($result, Response::HTTP_OK);
    }
    
    public function getServicesWithContent():JsonResponse{
        $services =$this->getDoctrine()->getRepository(Service::class)->getServicesWithContent();
        foreach($services as $service){
            $content = 
            $serviceData=[
                'id'=> $service->getId(),
                'name'=> $service->getName()
            ];
            $result[]=$serviceData; 
        }
        return $this->json($result,Response::HTTP_OK);
    }

    public function getServicesWithContent2():JsonResponse{
        $services =$this->getDoctrine()->getRepository(Service::class)->getServicesWithContent();
        foreach($services as $service){
            $logo = $service->getContent()->getLogo();
            $description = $service->getContent()->getShortDescription();
            $mainImg = $service->getContent()->getImgOne();
            $serviceData=[
                'id'=> $service->getId(),
                'name'=> $service->getName(),
                'logo'=> $logo,
                'shortDescription' => $description,
                'imgOne' => $mainImg
            ];
            $result[]=$serviceData; 
        }
        return $this->json($result,Response::HTTP_OK);
    }

    public function getServiceById(int $id,SerializerInterface $serializer): Response{
       $service=$this->getDoctrine()->getRepository(Service::class)->find($id);
       if (!$service) {
        return $this->json(['message' => 'Servcie not found'], Response::HTTP_NOT_FOUND);
       }
        $isMotherItem = true;
        $findMotherItem = $service->getService();
        if($findMotherItem !== null){
            $motherServiceId = $service->getService()->getId();
            $isMotherItem = false;
        }
        else{
            $motherServiceId=0;
        }
       $listCount= $this->getListLength($isMotherItem,$motherServiceId);
       $serializedService = $serializer->normalize($service, null, [
            AbstractNormalizer::ATTRIBUTES => [
                'id',
                'name',
                'orderInList',
                'isMotherItem',
                'motherId',
                'listCount' 
            ],
        ]);
        $serializedService['isMotherItem'] = $isMotherItem;
        $serializedService['motherId'] = $motherServiceId;
        $serializedService['listCount'] = $listCount;
        return $this->json($serializedService, Response::HTTP_OK);
    }


    public function addServiceToList(Request $request): Response
    {
        $data = json_decode($request->getContent(), true);

        $entityManager = $this->getDoctrine()->getManager();
        $newService = new Service();
        $newService->setName($data['name']);

        // Calculate orderInList
        $existingServicesCount = count($this->getDoctrine()->getRepository(Service::class)->findServicesWithNullService_id());
        $subServicesCount = count($data['subServices']);
        $newService->setOrderInList($existingServicesCount + 1);
     
        // Add subServices if provided
        if (isset($data['subServices']) && is_array($data['subServices']) && $subServicesCount>0) {
            $order=0;
            foreach ($data['subServices'] as $subServiceData) {
                $subService = new Service();
                $subService->setName($subServiceData['name']); 
                $subService->setOrderInList($order+1);
                $newService->addSubService($subService);
                $entityManager->persist($subService);
                $order++;
            }
        }

        $entityManager->persist($newService);
        $entityManager->flush();
        return $this->json(['message' => 'Service added successfully'], Response::HTTP_CREATED);
    }


    public function updateService(Request $request, LoggerInterface $logger):Response{
        $data = json_decode($request->getContent(), true);
        $entityManager = $this->getDoctrine()->getManager();
        if ( !(isset($data['id']) ) || !( isset($data['newOrder']) ) || !(isset($data['name'])) ) {
            if( !(isset($data['id']) )){
                return $this->json(['message' => 'id is missing'], Response::HTTP_NOT_FOUND);
            }else if ( !(isset($data['newOrder']) )) {
                return $this->json(['message' => 'new order is missing'], Response::HTTP_NOT_FOUND);
            }else if( !(isset($data['name']) ) ){
                return $this->json(['message' => 'name is missing'], Response::HTTP_NOT_FOUND);
            }
            else{
            return $this->json(['message' => 'variables are missing'], Response::HTTP_NOT_FOUND);
         }
        }
        
        $id=$data['id'];
        $newOrder =  (int) $data['newOrder'];
        $name= $data['name'];
        $service=$this->getDoctrine()->getRepository(Service::class)->find($id);
        if (!$service) {
            return $this->json(['message' => 'Servcie not found'], Response::HTTP_NOT_FOUND);
        }
        $currentOrderInList = $service->getOrderInList();
        if($newOrder !== $currentOrderInList){
            $hasMother =$data['hasMother'];
            if($hasMother == false){
                $otherService = $this->getDoctrine()->getRepository(Service::class)->findByOrderInList($newOrder);
            }else{
                $motherId =  (int)$data['motherId'];
                if(!$motherId){
                    return $this->json(['message' => 'mother id are missing'], Response::HTTP_NOT_FOUND);
                }
                $motherService = $this->getDoctrine()->getRepository(Service::class)->find($motherId);
                if(!$motherService){
                    return $this->json(['message' => 'mother service not found'], Response::HTTP_NOT_FOUND);
                }
                $otherService = $this->getDoctrine()->getRepository(Service::class)->findByOrderInSubList($newOrder,$motherId);
            }
            if(!$otherService){
                return $this->json(['message' => 'other service not found'], Response::HTTP_NOT_FOUND);
            }
            $otherService[0]->setOrderInList($currentOrderInList);
            $service->setOrderInList($newOrder);

        }
         // Calculate orderInList
         $subServicesCount = count($data['subServices']);
         $currentSubServiceCount =count($service->getSubServices());
         if (isset($data['subServices']) && is_array($data['subServices']) && $subServicesCount>0) {
             foreach ($data['subServices'] as $subServiceData) {
                 $subService = new Service();
                 $subService->setName($subServiceData['name']); 
                 $subService->setOrderInList($currentSubServiceCount+1);
                 $service->addSubService($subService);
                 $entityManager->persist($subService);
                 $currentSubServiceCount++;
             }
         }

        $service->setName($name);
        $entityManager->flush();
        return $this->json(['message' => 'Service updated'], Response::HTTP_OK);
    }

    public function deleteService(int $id, EntityManagerInterface $entityManager):Response{
        $service=$this->getDoctrine()->getRepository(Service::class)->find($id);
       if (!$service) {
        return $this->json(['message' => 'Servcie not found'], Response::HTTP_NOT_FOUND);
       }
        $isMotherItem = true;
        $findMotherItem = $service->getService();
        $motherServiceId=0;
        if($findMotherItem !== null){
            $motherServiceId = $service->getService()->getId();
            $isMotherItem = false;
        }
       $listCount= $this->getListLength($isMotherItem,$motherServiceId);
       $orderInList=$service->getOrderInList();
       if ($orderInList != $listCount){
        
            for( $i=$orderInList+1 ; $i<=$listCount ; $i++ ){
                if($isMotherItem){
                    $serviceWithNextOrder = $this->getDoctrine()->getRepository(Service::class)->findByOrderInList($i);
                }else{
                    $serviceWithNextOrder = $this->getDoctrine()->getRepository(Service::class)->findByOrderInSubList($i,$motherServiceId);
                }
                if(!$serviceWithNextOrder){
                    return $this->json(['error' => 'service with next order not found !'], Response::HTTP_NOT_FOUND);
                }
                $serviceWithNextOrder[0]->setOrderInList($i-1);
            }
        }  
        $entityManager->remove($service);
        $entityManager->flush();
        return $this->json(['message' => 'Service deleted'], Response::HTTP_OK);
       }
       
    public function getListLength(bool $isMother, int $id):int{
        if($isMother){
            $listLength = count($this->getDoctrine()->getRepository(Service::class)->findServicesWithNullService_id());
        }else{
            $listLength = $this->getDoctrine()->getRepository(Service::class)->countByService($id);
        }
        return $listLength;
    }

    
}
