<?php

namespace App\Repository;

use App\Entity\TbLogs;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TbLogs>
 *
 * @method TbLogs|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbLogs|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbLogs[]    findAll()
 * @method TbLogs[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbLogsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TbLogs::class);
    }

//    /**
//     * @return TbLogs[] Returns an array of TbLogs objects
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

//    public function findOneBySomeField($value): ?TbLogs
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
