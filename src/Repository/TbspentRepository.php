<?php

namespace App\Repository;

use App\Entity\Tbspent;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Tbspent>
 *
 * @method Tbspent|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tbspent|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tbspent[]    findAll()
 * @method Tbspent[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbspentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tbspent::class);
    }

//    /**
//     * @return Tbspent[] Returns an array of Tbspent objects
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

//    public function findOneBySomeField($value): ?Tbspent
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
