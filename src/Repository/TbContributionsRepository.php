<?php

namespace App\Repository;

use App\Entity\TbContributions;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TbContributions>
 *
 * @method TbContributions|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbContributions|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbContributions[]    findAll()
 * @method TbContributions[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbContributionsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TbContributions::class);
    }

//    /**
//     * @return TbContributions[] Returns an array of TbContributions objects
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

//    public function findOneBySomeField($value): ?TbContributions
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
