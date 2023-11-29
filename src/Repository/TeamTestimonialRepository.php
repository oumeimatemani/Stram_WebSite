<?php

namespace App\Repository;

use App\Entity\TeamTestimonial;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TeamTestimonial>
 *
 * @method TeamTestimonial|null find($id, $lockMode = null, $lockVersion = null)
 * @method TeamTestimonial|null findOneBy(array $criteria, array $orderBy = null)
 * @method TeamTestimonial[]    findAll()
 * @method TeamTestimonial[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TeamTestimonialRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TeamTestimonial::class);
    }

//    /**
//     * @return TeamTestimonial[] Returns an array of TeamTestimonial objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('t.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?TeamTestimonial
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
