<?php

namespace App\Repository;

use App\Entity\Service;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Service>
 *
 * @method Service|null find($id, $lockMode = null, $lockVersion = null)
 * @method Service|null findOneBy(array $criteria, array $orderBy = null)
 * @method Service[]    findAll()
 * @method Service[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ServiceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Service::class);
    }

    public function findServicesWithNullService_id()
    {
        $queryBuilder = $this->createQueryBuilder('s');
    $queryBuilder
        ->leftJoin('s.subServices', 'sub')
        ->where('s.service IS NULL')
        ->orderBy('s.orderInList', 'ASC')
        ->addSelect('sub')
        ->addOrderBy('sub.orderInList', 'ASC');

    return $queryBuilder->getQuery()->getResult();
    }
    public function countByService($service): int
    {
        return $this->createQueryBuilder('s')
            ->select('COUNT(s)')
            ->where('s.service = :service')
            ->setParameter('service', $service)
            ->getQuery()
            ->getSingleScalarResult();
    }
    public function findByOrderInList($order)
    {
         $queryBuilder =$this->createQueryBuilder('s');
         $queryBuilder
            ->andWhere('s.orderInList = :order')
            ->andWhere('s.service IS NULL')
            ->setParameter('order', $order);

            return $queryBuilder->getQuery()->getResult();
    }


    public function findByOrderInSubList($order, $motherService)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.orderInList = :order')
            ->andWhere('s.service = :motherService')
            ->setParameter('order', $order)
            ->setParameter('motherService', $motherService)
            ->getQuery()
            ->getResult();
    }
    /* OLD 
    public function findServicesWithNullService_id()
    {
        $queryBuilder = $this->createQueryBuilder('s');
        $queryBuilder
            ->where('s.service IS NULL')
            ->orderBy('s.orderInList', 'ASC');

        return $queryBuilder->getQuery()->getResult();
    }

    */

//    /**
//     * @return Service[] Returns an array of Service objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('s.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Service
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
