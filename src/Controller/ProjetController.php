<?php

namespace App\Controller;


use App\Entity\Pays;
use App\Entity\Project;
use App\Entity\Service;
use App\DTO\ServiceDTO;
use App\DTO\SimilarProjectDTO;
use App\Repository\ProjectRepository;
use App\Form\ProjetType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Component\Validator\Validator\ValidatorInterface;

use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\String\UnicodeString;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\JsonResponse;


class ProjetController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function getAllOne(ProjectRepository $repository): Response
    {
        $projects = $repository->getAllOne();
        return $this->json($projects);
    }
    public function getProjectsByCountry(Request $request, ProjectRepository $projectRepository): Response
    {
        $data = json_decode($request->getContent(), true);
        $countryName = $data['countryName'];
        $projects = $projectRepository->findByCountryName($countryName);

        if (!$projects) {
        //    return $this->json(['message' => 'No projects found for this country'], Response::HTTP_NOT_FOUND);
            return $this->json([]);
        }
        return $this->json($projects);
    }
    public function getProjectByCountryAndByService(Request $request, ProjectRepository $projectRepository): Response{
        $data = json_decode($request->getContent(), true);
        $countryName = $data['countryName'];
        $serviceName = $data['serviceName'];
        $projects = $projectRepository->findByCountryNameAndServiceName($countryName,$serviceName);

        if (!$projects) {
        //    return $this->json(['message' => 'No projects found for this country'], Response::HTTP_NOT_FOUND);
            return $this->json([]);
        }
        return $this->json($projects);
    }
    public function getOneProject(ProjectRepository $repository , int $id): Response
    {
        $project = $repository->findOneProject($id);
        if(!$project){
            return $this->json("Project not found",Response::HTTP_NOT_FOUND);
        }
        return $this->json($project);
    }



    public function createProject(Request $request,
        EntityManagerInterface $entityManager,
        SerializerInterface $serializer,
        ValidatorInterface $validator,
        SluggerInterface $slugger): Response
    {
        $data = $request->request->all();
        $file1 = $request->files->get('img1');
        $file2 = $request->files->get('img2');
        $file3 = $request->files->get('img3');
        $file4 = $request->files->get('img4');
        $file5 = $request->files->get('img5');
        $file6 = $request->files->get('img6');
        $file7 = $request->files->get('img7');
        $project = $serializer->denormalize($data, Project::class);
        if(!isset($data['country']) || $data['country'] == 'undefined' || $data['country'] == null ){

            $tunisia = $this->getDoctrine()->getRepository(Pays::class)->findTheCountry('Tunisie');
            $project->setCountry($tunisia);
            
        }else{
            $countryId = $data['country'];
          //  return $this->json($countryId);
            $country = $this->getDoctrine()->getRepository(Pays::class)->find($countryId);
            if(!$country){
                throw $this->createNotFoundException('country introuvable');
            }
            $project->setCountry($country);
        }
        
        
        

        $errors = $validator->validate($project);
        if (count($errors) > 0) {
            return $this->json(['errors' => $errors], Response::HTTP_BAD_REQUEST);
        }
        if ($file1){
            $newFilename1 = $this->handleImage($file1,$slugger);
            $project->setImg1($newFilename1);
        }
        
        if ($file2){
            $newFilename2 = $this->handleImage($file2,$slugger);
            $project->setImg2($newFilename2);
        }
        
        if ($file3){
            $newFilename3 = $this->handleImage($file3,$slugger);
            $project->setImg3($newFilename3);
        }
        
        if ($file4){
            $newFilename4 = $this->handleImage($file4,$slugger);
            $project->setImg4($newFilename4);
        }
       
        if ($file5){
            $newFilename5 = $this->handleImage($file5,$slugger);
            $project->setImg5($newFilename5);
        }
        
        if ($file6){
            $newFilename6 = $this->handleImage($file6,$slugger);
            $project->setImg6($newFilename6);
        }

        if ($file7){
            $newFilename7 = $this->handleImage($file7,$slugger);
            $project->setImg7($newFilename7);
        }
        
       

        $this->entityManager->persist($project);
        $this->entityManager->flush();

        return $this->json(
            $project,
            Response::HTTP_CREATED,
            [],
            ['groups' => 'country_relationships']
        );

    }
    public function updateImages(Request $request, int $id,
        EntityManagerInterface $entityManager,
        SerializerInterface $serializer,
        ValidatorInterface $validator,
        ProjectRepository $repository,
        SluggerInterface $slugger): Response
    {
      //  $data = $request->files->all();
        $project = $repository->find($id);
        $data = $request->files->all();

        $file1 = $request->files->get('img1');
        $file2 = $request->files->get('img2');
        $file3 = $request->files->get('img3');
        $file4 = $request->files->get('img4');
        $file5 = $request->files->get('img5');
        $file6 = $request->files->get('img6');
        $file7 = $request->files->get('img7');
        //$em = $entityManager = $this->getDoctrine()->getManager();
       
        if ($file1){
            $newFilename1 = $this->handleImage($file1,$slugger);
            $project->setImg1($newFilename1);
        }
        
        if ($file2){
            $newFilename2 = $this->handleImage($file2,$slugger);
            $project->setImg2($newFilename2);
        }
        
        if ($file3){
            
            $newFilename3 = $this->handleImage($file3,$slugger);
            $project->setImg3($newFilename3);
        }
        
      //  if (isset($file4)){
           // return $this->json(["file 4 herereeee"]);
           if($file4){
            $newFilename4 = $this->handleImage($file4,$slugger);
            $project->setImg4($newFilename4);
           }
    //    }else{
           // return $this->json(["file 4 noot existsss "]);
    //    }
       
        if ($file5){
            $newFilename5 = $this->handleImage($file5,$slugger);
            $project->setImg5($newFilename5);
        }
        
        if ($file6){
            $newFilename6 = $this->handleImage($file6,$slugger);
            $project->setImg6($newFilename6);
        }

        if ($file7){
            $newFilename7 = $this->handleImage($file7,$slugger);
            $project->setImg7($newFilename7);
        }
        
       
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($project);
        $entityManager->flush();
       

        return $this->json(
            $project,
            Response::HTTP_OK,
            [],
            ['groups' => 'country_relationships']
        );

    }

    public function handleImage(UploadedFile $file ,  SluggerInterface $slugger ){
        
        $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFilename = $slugger->slug(new UnicodeString($originalFilename));
        $newFilename = $safeFilename . '-' . uniqid() . '.' . $file->guessExtension();

        try {
            $file->move(
                $this->getParameter('project_photo_directory'),
                $newFilename
            );
        } catch (FileException $e) {
            return $this->json(['error' => 'File upload failed'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
        return $newFilename;
    
}



    public function updateProject(Request $request, int $id,
            ProjectRepository $repository,
            EntityManagerInterface $entityManager,
            Filesystem $filesystem,
            SerializerInterface $serializer): Response
    {
        $projet = $repository->find($id);

        if (!$projet) {
            return $this->json(['message' => 'Project not found'], Response::HTTP_NOT_FOUND);
        }
        $data = json_decode($request->getContent(), true);
        $entityManager = $this->getDoctrine()->getManager();
     
        if( isset($data['country'] ) && $data['country'] !== null ){
            $countryId = $data['country'];
            $country = $this->getDoctrine()->getRepository(Pays::class)->find($countryId);
            if(!$country){
                throw $this->createNotFoundException('country introuvable');
            }
            $projet->setCountry($country);
        }
         if(isset($data["title"]) && $data['title']!=null){
            $projet->setTitle($data["title"]);
        }
        if(isset($data["description"]) && $data['description']!=null){
            $projet->setDescription($data["description"]);
        }
        if(isset($data["shortDescription"]) && $data['shortDescription']!=null){
            $projet->setShortDescription($data["shortDescription"]);
        }
        if(isset($data["technic1"]) && $data['technic1']!=null){
            $projet->setTechnic1($data["technic1"]);
        }
        if(isset($data["technic2"]) && $data['technic2']!=null){
            $projet->setTechnic2($data["technic2"]);
        }
        if(isset($data["technic3"]) && $data['technic3']!=null){
            $projet->setTechnic3($data["technic3"]);
        }
        if(isset($data["technic4"]) && $data['technic4']!=null){
            $projet->setTechnic4($data["technic4"]);
        }
        if(isset($data["technic5"]) && $data['technic5']!=null){
            $projet->setTechnic5($data["technic5"]);
        }
        if(isset($data["technic6"]) && $data['technic6']!=null){
            $projet->setTechnic6($data["technic6"]);
        }

       
        $entityManager->flush();

        return $this->json(['message' => 'Project updated'], Response::HTTP_OK);
    }


    



    public function deleteProject(int $id, Filesystem $filesystem):Response{
        $project=$this->getDoctrine()->getRepository(Project::class)->find($id);
        if(!$project) return $this->json(['message' => 'Project not found'], Response::HTTP_NOT_FOUND);

        $photoFilename1 = $project->getImg1();
        $photoFilename2 = $project->getImg2();
        $photoFilename3 = $project->getImg3();
        $photoFilename4 = $project->getImg4();
        $photoFilename5 = $project->getImg5();
        $photoFilename6 = $project->getImg6();
        $photoFilename7 = $project->getImg7();

        // Remove the content from the database
        $this->entityManager->remove($project);
        // setServiceContent to null
        
        $this->entityManager->flush();

        // Delete the images file from the server
        $photoPath1 = $this->getParameter('project_photo_directory') . $photoFilename1;
        if ($filesystem->exists($photoPath1)) {
            $filesystem->remove($photoPath1);
        }

        $photoPath2 = $this->getParameter('project_photo_directory') . $photoFilename2;
        if ($filesystem->exists($photoPath2)) {
            $filesystem->remove($photoPath2);
        }

        $photoPath3 = $this->getParameter('project_photo_directory') . $photoFilename3;
        if ($filesystem->exists($photoPath3)) {
            $filesystem->remove($photoPath3);
        }

        $photoPath4 = $this->getParameter('project_photo_directory') . $photoFilename4;
        if ($filesystem->exists($photoPath4)) {
            $filesystem->remove($photoPath4);
        }

        $photoPath5 = $this->getParameter('project_photo_directory') . $photoFilename5;
        if ($filesystem->exists($photoPath5)) {
            $filesystem->remove($photoPath5);
        }

        $photoPath6 = $this->getParameter('project_photo_directory') . $photoFilename6;
        if ($filesystem->exists($photoPath6)) {
            $filesystem->remove($photoPath6);
        }
        $photoPath7 = $this->getParameter('project_photo_directory') . $photoFilename7;
        if ($filesystem->exists($photoPath7)) {
            $filesystem->remove($photoPath7);
        }

        return $this->json(['message' => 'Project and associated photo deleted'], Response::HTTP_OK);

    }


    public function addServiceToProject(Request $request, EntityManagerInterface $entityManager): Response
        {
            $data = json_decode($request->getContent(), true);
            $projectId = $data['projectId'];
            $serviceId = $data['serviceId'];

            $project = $entityManager->getRepository(Project::class)->find($projectId);
            $service = $entityManager->getRepository(Service::class)->find($serviceId);

            if (!$project) {
                return $this->json(['message' => 'Project not found'], Response::HTTP_NOT_FOUND);
            }

            if (!$service) {
                return $this->json(['message' => 'Service not found'], Response::HTTP_NOT_FOUND);
            }

            $project->addService($service);
            $service->addProject($project);

            $entityManager->persist($project);
            $entityManager->persist($service);
            $entityManager->flush();

            return $this->json(['message' => 'Service added to project successfully']);
        }


    public function getAllServicesByProjectId(Request $request,ProjectRepository $projectRepository): Response
    {
        $data = json_decode($request->getContent(), true);
        $projectId = $data['projectId'];
        $project = $projectRepository->find($projectId);

        if (!$project) {
            return $this->json(['message' => 'Project not found'], Response::HTTP_NOT_FOUND);
        }

        $servicesDTOs = array_map(function ($service) {
            return new ServiceDTO($service->getId(), $service->getName());
        }, $project->getServices()->toArray());

        return $this->json( $servicesDTOs, Response::HTTP_OK);
    }

    public function removeServiceFromProject(int $projectId,int $serviceId, EntityManagerInterface $entityManager): Response
    {

        $project = $entityManager->getRepository(Project::class)->find($projectId);
        $service = $entityManager->getRepository(Service::class)->find($serviceId);

        if (!$project) {
            return $this->json(['message' => 'Project not found'], Response::HTTP_NOT_FOUND);
        }

        if (!$service) {
            return $this->json(['message' => 'Service not found'], Response::HTTP_NOT_FOUND);
        }

        // Remove the service from the project
        $project->removeService($service);
        $service->removeProject($project);
        $entityManager->persist($project);
        $entityManager->persist($service);
        $entityManager->flush();

        return $this->json(['message' => 'Service removed from project successfully']);
    }


    public function addSimilarProjectToProject(Request $request, EntityManagerInterface $entityManager): Response
        {
            $data = json_decode($request->getContent(), true);
            $projectId = $data['projectId'];
            $similarProjectId = $data['similarProjectId'];

            $project = $entityManager->getRepository(Project::class)->find($projectId);
            $similarProject = $entityManager->getRepository(Project::class)->find($similarProjectId);

            if (!$project) {
                return $this->json(['message' => 'Project not found'], Response::HTTP_NOT_FOUND);
            }

            if (!$similarProject) {
                return $this->json(['message' => 'smilar project not found'], Response::HTTP_NOT_FOUND);
            }

            $project->addSimilarProject($similarProject);
            $similarProject->addSimilarProject($project);
            $entityManager->persist($project);
            $entityManager->persist($similarProject);
            $entityManager->flush();

            return $this->json(['message' => 'Similar project added to project successfully']);
        }

    public function getAllSimilarProjectsByProjectId(Request $request,ProjectRepository $projectRepository): Response
    {
        $data = json_decode($request->getContent(), true);
        $projectId = $data['projectId'];
        $project = $projectRepository->find($projectId);

        if (!$project) {
            return $this->json(['message' => 'Project not found'], Response::HTTP_NOT_FOUND);
        }

        $projectsDTOs = array_map(function ($similarProject) {
            return new SimilarProjectDTO($similarProject->getId(), $similarProject->getTitle());
        }, $project->getSimilarProjects()->toArray());

        return $this->json( $projectsDTOs, Response::HTTP_OK);
    }


    public function removeSimilarProjectFromProject(int $projectId,int $similarProjectId, EntityManagerInterface $entityManager): Response
    {

        
        $project = $entityManager->getRepository(Project::class)->find($projectId);
        $similarProject = $entityManager->getRepository(Project::class)->find($similarProjectId);

        if (!$project) {
            return $this->json(['message' => 'Project not found'], Response::HTTP_NOT_FOUND);
        }

        if (!$similarProject) {
            return $this->json(['message' => 'Service not found'], Response::HTTP_NOT_FOUND);
        }

        // Remove the service from the project
        $project->removeSimilarProject($similarProject);
        $similarProject->removeSimilarProject($project);

        $entityManager->persist($project);
        $entityManager->persist($similarProject);
        $entityManager->flush();

        return $this->json(['message' => 'similar project removed from project successfully']);
    }


    public function makeProjectPopular(Request $request, ProjectRepository $projectRepository, EntityManagerInterface $entityManager): Response
    {
        $data = json_decode($request->getContent(), true);
        $projectId = $data['projectId'];
        $project = $projectRepository->find($projectId);

        if (!$project) {
            return $this->json(['message' => 'Project not found'], Response::HTTP_NOT_FOUND);
        }

        if ($projectRepository->countPopularProjects() >= 6) {
            return $this->json(['message' => 'Nombre maximum de projets populaires atteint'], Response::HTTP_BAD_REQUEST);
        }

        $project->setIsPopular(true);
        $entityManager->persist($project);
        $entityManager->flush();

        return $this->json(['message' => 'Project marked as popular']);
    }

    public function makePopularProjectNotPopular(Request $request, ProjectRepository $projectRepository, EntityManagerInterface $entityManager): Response
    {
        $data = json_decode($request->getContent(), true);
        $projectId = $data['projectId'];
        $project = $projectRepository->find($projectId);

        if (!$project) {
            return $this->json(['message' => 'Project not found'], Response::HTTP_NOT_FOUND);
        }

        // Set the project as not popular
        $project->setIsPopular(false);
        $entityManager->persist($project);
        $entityManager->flush();

        return $this->json(['message' => 'Project is no longer marked as popular']);
    }

    public function getAllPopularProjects(ProjectRepository $projectRepository): Response
    {
        $popularProjects = $projectRepository->findAllPopularProjects();

        return $this->json($popularProjects);
    }


}
