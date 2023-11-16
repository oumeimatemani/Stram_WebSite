<?php

namespace App\Service;

use App\Entity\Service;


class ServiceHandler
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function addServiceWithSubServices($data)
    {
        $newService = new Service();
        $newService->setName($data['name']);
        $existingServicesCount = count($this->getDoctrine()->getRepository(Service::class)->findServicesWithNullService_id());
        $newService->setOrderInList($existingServicesCount + 1);
        $subServicesCount = count($data['subServices']);

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
        $this->entityManager->persist($newService);
        $this->entityManager->flush();

        return ['success' => true, 'message' => 'Service added successfully'];
    }
}
