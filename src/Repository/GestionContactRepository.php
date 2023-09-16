<?php

namespace App\Repository;

use App\Entity\GestionContact;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<GestionContact>
 *
 * @method GestionContact|null find($id, $lockMode = null, $lockVersion = null)
 * @method GestionContact|null findOneBy(array $criteria, array $orderBy = null)
 * @method GestionContact[]    findAll()
 * @method GestionContact[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GestionContactRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GestionContact::class);
    }

//    /**
//     * @return GestionContact[] Returns an array of GestionContact objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('g')
//            ->andWhere('g.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('g.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?GestionContact
//    {
//        return $this->createQueryBuilder('g')
//            ->andWhere('g.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
