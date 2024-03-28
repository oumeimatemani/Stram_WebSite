<?php

namespace App\Repository;

use App\Entity\Blogs;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Blogs>
 *
 * @method Blogs|null find($id, $lockMode = null, $lockVersion = null)
 * @method Blogs|null findOneBy(array $criteria, array $orderBy = null)
 * @method Blogs[]    findAll()
 * @method Blogs[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BlogsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Blogs::class);
    }
    public function getAllOne(): array
    {
        $queryBuilder = $this->createQueryBuilder('b')
            ->select('b.id', 'b.title', 'b.description', 'b.shortDescription', 'b.img1','b.isPopular')
            ->orderBy('b.id', 'DESC')
            ->getQuery();

        return $queryBuilder->getArrayResult();
    }


    public function findOneBlog($projectId)
    {
        return $this->createQueryBuilder('b')
            ->select('b.id', 'b.title', 'b.description', 'b.shortDescription', 'b.img1','b.img2','b.img3','b.datearticle')
            ->andWhere('b.id = :projectId')
            ->setParameter('projectId', $projectId)
            ->getQuery()
            ->getOneOrNullResult();
    }

    public function countPopularBlogs(): int
    {
        return (int) $this->createQueryBuilder('p')
            ->select('count(p.id)')
            ->where('p.isPopular = :isPopular')
            ->setParameter('isPopular', true)
            ->getQuery()
            ->getSingleScalarResult();
    }


    public function findAllPopularBlogs(): array
    {
        return $this->createQueryBuilder('p')
        ->select('p.id', 'p.title', 'p.shortDescription', 'p.img1','p.isPopular')
            ->where('p.isPopular = :isPopular')
            ->setParameter('isPopular', true)
            ->getQuery()
            ->getResult();
    }


}
