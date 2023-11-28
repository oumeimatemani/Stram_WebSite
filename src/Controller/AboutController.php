<?php
namespace App\Controller;

use App\Entity\About;
use App\Entity\Team;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\String\UnicodeString;
use Symfony\Component\Filesystem\Filesystem;
use App\Repository\TeamRepository;

class AboutController extends AbstractController{

    public function getAboutStram(SerializerInterface $serializer): JsonResponse{
        $about = $this->getDoctrine()->getRepository(About::class)->findOneBy(['id' => 1]);
        if (!$about) return $this->json(['message' => 'HomeOne entity with id = 1 not found'], Response::HTTP_NOT_FOUND);
        $serializedData = $serializer->serialize($about, 'json');
        return new JsonResponse($serializedData,  Response::HTTP_OK, [], true);
    }
    
    public function updateAboutStram(Request $request, SerializerInterface $serializer): JsonResponse{
        
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

    public function getTeam(TeamRepository $repository, SerializerInterface $serializer): Response {
        $Team = $repository->findAll();
        $serializedTeam = $serializer->normalize($Team, null, [
            AbstractNormalizer::ATTRIBUTES => [
                'id',
                'name',
                'position',
                'photo'
            ],
        ]);
        return $this->json($serializedTeam, Response::HTTP_OK);
    }

    public function getTeamById(int $id, TeamRepository $repository, SerializerInterface $serializer): Response {
        $Team = $repository->find($id);

        if (!$Team) {
            return $this->json(['message' => 'Team not found'], Response::HTTP_NOT_FOUND);
        }
        $serializedTeam = $serializer->normalize($Team, null, [
            AbstractNormalizer::ATTRIBUTES => [
                'id',
                'name',
                'position',
                'photo',
            ],
        ]);
        return $this->json($serializedTeam, Response::HTTP_OK);
    }

    public function createTeam(
        Request $request,
        SerializerInterface $serializer,
        ValidatorInterface $validator,
        SluggerInterface $slugger
    ): Response {
        $entityManager = $this->getDoctrine()->getManager();
        $data = $request->request->all();
        $file = $request->files->get('photo');
        $team = $serializer->denormalize($data, Team::class);

        $errors = $validator->validate($team);
        if (count($errors) > 0) {
            return $this->json(['errors' => $errors], Response::HTTP_BAD_REQUEST);
        }

        if ($file) {
            $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFilename = $slugger->slug(new UnicodeString($originalFilename));
            $newFilename = $safeFilename . '-' . uniqid() . '.' . $file->guessExtension();

            try {
                $file->move(
                    $this->getParameter('team_photos_directory'),
                    $newFilename
                );
            } catch (FileException $e) {
                return $this->json(['error' => 'File upload failed'], Response::HTTP_INTERNAL_SERVER_ERROR);
            }

            $team->setPhoto($newFilename);
        }
        $entityManager->persist($team);
        $entityManager->flush();

        return $this->json(
            $team,
            Response::HTTP_CREATED,
            [],
            [AbstractNormalizer::GROUPS => 'client_testimonial']
        );
    }

    public function updateTeam(
        int $id,
        Request $request,
        TeamRepository $repository,
        Filesystem $filesystem,
        SerializerInterface $serializer
    ): Response {
        $entityManager = $this->getDoctrine()->getManager();
        $Team = $repository->find($id);

        if (!$Team) {
            return $this->json(['message' => 'Team not found'], Response::HTTP_NOT_FOUND);
        }

        $data = json_decode($request->getContent(), true);
        $newPhoto = $request->files->get('photo');

        if ($newPhoto) {
            $previousPhoto = $Team->getPhoto();
            if ($previousPhoto) {
                $photoPath = $this->getParameter('client_Team_photos_directory') . $previousPhoto;
                if ($filesystem->exists($photoPath)) {
                    $filesystem->remove($photoPath);
                }
            }

            $newFilename = $this->handleFileUpload($newPhoto);
            $Team->setPhoto($newFilename);
        }

        if(isset($data["name"]) && $data['name']!=null){
            $Team->setName($data["name"]);
        }
        if(isset($data["position"]) && $data['position']!=null){
            $Team->setPosition($data["position"]);
        }

        $entityManager->flush();

        return $this->json(['message' => 'Team updated'], Response::HTTP_OK);
    }

    private function handleFileUpload($file) {
        $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $slugger = new SluggerInterface();
        $safeFilename = $slugger->slug(new UnicodeString($originalFilename));
        $newFilename = $safeFilename . '-' . uniqid() . '.' . $file->guessExtension();

        $file->move(
            $this->getParameter('team_photos_directory'),
            $newFilename
        );

        return $newFilename;
    }


    public function deleteTeamById(int $id, TeamRepository $repository, Filesystem $filesystem): Response {
        $Team = $repository->find($id);
        $entityManager = $this->getDoctrine()->getManager();

        if (!$Team) {
            return $this->json(['message' => 'Team not found'], Response::HTTP_NOT_FOUND);
        }

        $photoFilename = $Team->getPhoto();

        $entityManager->remove($Team);
        $entityManager->flush();

        $photoPath = $this->getParameter('team_photos_directory') . $photoFilename;
        if ($filesystem->exists($photoPath)) {
            $filesystem->remove($photoPath);
        }

        return $this->json(['message' => 'Team and associated photo deleted'], Response::HTTP_OK);
    }



}