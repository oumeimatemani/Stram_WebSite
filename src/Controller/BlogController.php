<?php

namespace App\Controller;

use App\Entity\Blogs;
use App\Repository\BlogsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\String\UnicodeString;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class BlogController extends AbstractController
{

    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function getAllOne(BlogsRepository $repository): Response
    {
        $projects = $repository->getAllOne();
        return $this->json($projects);
    }

    public function getOneBlog(BlogsRepository $repository , int $id): Response
    {
        $project = $repository->findOneBlog($id);
        if(!$project){
            return $this->json("Project not found",Response::HTTP_NOT_FOUND);
        }
        return $this->json($project);
    }
    
    public function createBlog(Request $request,
    EntityManagerInterface $entityManager,
    SerializerInterface $serializer,
    ValidatorInterface $validator,
    SluggerInterface $slugger): Response
    {
        $data = $request->request->all();
        $file1 = $request->files->get('img1');
        $file2 = $request->files->get('img2');
        $file3 = $request->files->get('img3');
        $project = $serializer->denormalize($data, Blogs::class);
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

        $this->entityManager->persist($project);
        $this->entityManager->flush();

        return $this->json(
            $project,
            Response::HTTP_CREATED,
            [],
        );


    }

    public function handleImage(UploadedFile $file ,  SluggerInterface $slugger ){

        $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFilename = $slugger->slug(new UnicodeString($originalFilename));
        $newFilename = $safeFilename . '-' . uniqid() . '.' . $file->guessExtension();
        try {
            $file->move(
                $this->getParameter('blogss_photo_directory'),
                $newFilename
            );
        }
        catch (FileException $e) {
            return $this->json(['error' => 'File upload failed'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }

        return $newFilename;

    }

    public function updateBloogs(Request $request, int $id,
            BlogsRepository $repository,
            EntityManagerInterface $entityManager,
            Filesystem $filesystem,
            SerializerInterface $serializer): Response
    {

        $bloogs = $repository->find($id);

        if (!$bloogs) {
            return $this->json(['message' => 'Blog not found'], Response::HTTP_NOT_FOUND);
        }
        $data = json_decode($request->getContent(), true);
        $entityManager = $this->getDoctrine()->getManager();

        if(isset($data["title"]) && $data['title']!=null){
            $bloogs->setTitle($data["title"]);
        }

        if(isset($data["description"]) && $data['description']!=null){
            $bloogs->setDescription($data["description"]);
        }

        if(isset($data["shortDescription"]) && $data['shortDescription']!=null){
            $bloogs->setShortDescription($data["shortDescription"]);
        }

        $entityManager->persist($bloogs);

        $entityManager->flush();

        return $this->json(['message' => 'Blog updated'], Response::HTTP_OK);


    }

    public function deleteBloggs(int $id, Filesystem $filesystem):Response{

        $project=$this->getDoctrine()->getRepository(Blogs::class)->find($id);

        if(!$project) return $this->json(['message' => 'Blogs not found'], Response::HTTP_NOT_FOUND);

        $photoFilename1 = $project->getImg1();
        $photoFilename2 = $project->getImg2();
        $photoFilename3 = $project->getImg3();

        $this->entityManager->remove($project);
        $this->entityManager->flush();

        $photoPath1 = $this->getParameter('blogss_photo_directory') . $photoFilename1;
        if ($filesystem->exists($photoPath1)) {
            $filesystem->remove($photoPath1);
        }

        $photoPath2 = $this->getParameter('blogss_photo_directory') . $photoFilename2;
        if ($filesystem->exists($photoPath2)) {
            $filesystem->remove($photoPath2);
        }

        $photoPath3 = $this->getParameter('blogss_photo_directory') . $photoFilename3;
        if ($filesystem->exists($photoPath3)) {
            $filesystem->remove($photoPath3);
        }

        return $this->json(['message' => 'Blog and associated photo deleted'], Response::HTTP_OK);





    }



    public function makeBlogPopular(Request $request, BlogsRepository $bloogRepository, EntityManagerInterface $entityManager): Response
    {
        $data = json_decode($request->getContent(), true);
        $projectId = $data['projectId'];
        $bblog = $bloogRepository->find($projectId);

        if (!$bblog) {
            return $this->json(['message' => 'Blog not found'], Response::HTTP_NOT_FOUND);
        }

        if ($bloogRepository->countPopularBlogs() >= 2) {
            return $this->json(['message' => 'Nombre maximum de blogs populaires atteint'], Response::HTTP_BAD_REQUEST);
        }

        $bblog->setIsPopular(true);
        $entityManager->persist($bblog);
        $entityManager->flush();

        return $this->json(['message' => 'Blog marked as popular']);
    }



    public function makePopularBlogNotPopular(Request $request, BlogsRepository $bblogRepository, EntityManagerInterface $entityManager): Response
    {
        $data = json_decode($request->getContent(), true);
        $projectId = $data['projectId'];
        $blogg = $bblogRepository->find($projectId);

        if (!$blogg) {
            return $this->json(['message' => 'Blog not found'], Response::HTTP_NOT_FOUND);
        }

  
        $blogg->setIsPopular(false);
        $entityManager->persist($blogg);
        $entityManager->flush();

        return $this->json(['message' => 'Blog is no longer marked as popular']);
    }



    public function getAllPopularBlogs(BlogsRepository $blogsRepository): Response
    {
        $popularBlogs = $blogsRepository->findAllPopularBlogs();

        return $this->json($popularBlogs);
    }




}
