<?php

namespace App\Repository;

use App\Entity\TbPayements;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TbPayements>
 *
 * @method TbPayements|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbPayements|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbPayements[]    findAll()
 * @method TbPayements[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbPayementsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TbPayements::class);
    }

//    /**
//     * @return TbPayements[] Returns an array of TbPayements objects
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

//    public function findOneBySomeField($value): ?TbPayements
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
