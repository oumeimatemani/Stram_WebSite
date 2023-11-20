<?php

namespace App\Repository;

use App\Entity\ServiceContent;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ServiceContent>
 *
 * @method ServiceContent|null find($id, $lockMode = null, $lockVersion = null)
 * @method ServiceContent|null findOneBy(array $criteria, array $orderBy = null)
 * @method ServiceContent[]    findAll()
 * @method ServiceContent[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ServiceContentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ServiceContent::class);
    }

//    /**
//     * @return ServiceContent[] Returns an array of ServiceContent objects
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

//    public function findOneBySomeField($value): ?ServiceContent
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
