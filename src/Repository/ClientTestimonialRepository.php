<?php

namespace App\Repository;

use App\Entity\ClientTestimonial;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ClientTestimonial>
 *
 * @method ClientTestimonial|null find($id, $lockMode = null, $lockVersion = null)
 * @method ClientTestimonial|null findOneBy(array $criteria, array $orderBy = null)
 * @method ClientTestimonial[]    findAll()
 * @method ClientTestimonial[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClientTestimonialRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ClientTestimonial::class);
    }

//    /**
//     * @return ClientTestimonial[] Returns an array of ClientTestimonial objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ClientTestimonial
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
