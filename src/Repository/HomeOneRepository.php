<?php

namespace App\Repository;

use App\Entity\HomeOne;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<HomeOne>
 *
 * @method HomeOne|null find($id, $lockMode = null, $lockVersion = null)
 * @method HomeOne|null findOneBy(array $criteria, array $orderBy = null)
 * @method HomeOne[]    findAll()
 * @method HomeOne[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HomeOneRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, HomeOne::class);
    }

//    /**
//     * @return HomeOne[] Returns an array of HomeOne objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('h')
//            ->andWhere('h.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('h.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?HomeOne
//    {
//        return $this->createQueryBuilder('h')
//            ->andWhere('h.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
