<?php

namespace App\Controller;
use App\Entity\Pays;
use App\DTO\CountryDTO;
use App\Repository\PaysRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class CountryController extends AbstractController
{
    public function list(PaysRepository $repository): JsonResponse
    {
        $country = $repository->findAll();
        $countryDTOs = array_map(function ($pays) {
            return new CountryDTO($pays->getId(), $pays->getCountryName(), $pays->getCountryCode());
        }, $country);

        return $this->json($countryDTOs);
    }
    

    public function createCountry(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $pays = new Pays();
        if(isset($data['countryName'])) $countryName = $data['countryName'];
        if(isset($data['countryCode'])) $countryCode = $data['countryCode'];
        $pays->setCountryName($countryName);
        $pays->setCountryCode($countryCode);

        $em = $this->getDoctrine()->getManager();
        $em->persist($pays);
        $em->flush();
        return $this->json(['status' => 'country is added!'], Response::HTTP_CREATED, [], ['groups' => 'country_projects']);
   }

    public function deleteCountry(int $id, PaysRepository $repository){
        $country = $repository->find($id);
        $entityManager = $this->getDoctrine()->getManager();
        if (!$country) {
            return $this->json(['message' => 'country not found'], Response::HTTP_NOT_FOUND);
        }
        $entityManager->remove($country);
        $entityManager->flush();
        return $this->json(['message' => 'country is deleted'], Response::HTTP_OK);
  }
}
