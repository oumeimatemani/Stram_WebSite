<?php

namespace App\Repository;
use App\DTO\ProjectDTO;
use App\Entity\Project;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Project>
 *
 * @method Project|null find($id, $lockMode = null, $lockVersion = null)
 * @method Project|null findOneBy(array $criteria, array $orderBy = null)
 * @method Project[]    findAll()
 * @method Project[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProjectRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Project::class);
    }

    public function getAllOne(): array
    {
        $queryBuilder = $this->createQueryBuilder('p')
            ->select('p.id', 'p.title', 'p.description', 'p.shortDescription', 'c.countryName', 'p.img1', 'p.technic1', 'p.technic2','p.technic3','p.technic4','p.technic5','p.technic6','p.isPopular')
            ->leftJoin('p.country', 'c')
            ->orderBy('p.id', 'DESC')
            ->getQuery();

        return $queryBuilder->getArrayResult();
    }

    public function findOneProject($projectId)
    {
        return $this->createQueryBuilder('p')
            ->select('p.id', 'p.title', 'p.description', 'p.shortDescription', 'c.countryName', 'p.img1','p.img2','p.img3','p.img4','p.img5','p.img6','p.img7', 'p.technic1', 'p.technic2','p.technic3','p.technic4','p.technic5','p.technic6')
            ->andWhere('p.id = :projectId')
            ->setParameter('projectId', $projectId)
            ->leftJoin('p.country', 'c')
            ->getQuery()
            ->getOneOrNullResult();
    }

    public function findByCountryName(string $countryName): array
    {
        return $this->createQueryBuilder('p')
            ->select('p.id', 'p.title', 'p.shortDescription', 'c.countryName', 'p.img1')
            ->join('p.country', 'c')
            ->where('c.countryName = :countryName')
            ->setParameter('countryName', $countryName)
            ->getQuery()
            ->getResult();
    }

    public function countPopularProjects(): int
    {
        return (int) $this->createQueryBuilder('p')
            ->select('count(p.id)')
            ->where('p.isPopular = :isPopular')
            ->setParameter('isPopular', true)
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function findAllPopularProjects(): array
    {
        return $this->createQueryBuilder('p')
        ->select('p.id', 'p.title', 'p.shortDescription', 'c.countryName', 'p.img1','p.isPopular')
            ->where('p.isPopular = :isPopular')
            ->setParameter('isPopular', true)
            ->leftJoin('p.country', 'c')
            ->getQuery()
            ->getResult();
    }
}
