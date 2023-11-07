<?php

namespace App\Repository;

use App\Entity\TbNotification;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TbNotification>
 *
 * @method TbNotification|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbNotification|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbNotification[]    findAll()
 * @method TbNotification[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbNotificationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TbNotification::class);
    }

//    /**
//     * @return TbNotification[] Returns an array of TbNotification objects
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

//    public function findOneBySomeField($value): ?TbNotification
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
