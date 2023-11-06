<?php

namespace App\Repository;

use App\Entity\HomeTwo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<HomeTwo>
 *
 * @method HomeTwo|null find($id, $lockMode = null, $lockVersion = null)
 * @method HomeTwo|null findOneBy(array $criteria, array $orderBy = null)
 * @method HomeTwo[]    findAll()
 * @method HomeTwo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HomeTwoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, HomeTwo::class);
    }

//    /**
//     * @return HomeTwo[] Returns an array of HomeTwo objects
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

//    public function findOneBySomeField($value): ?HomeTwo
//    {
//        return $this->createQueryBuilder('h')
//            ->andWhere('h.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
