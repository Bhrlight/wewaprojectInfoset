<?php

namespace App\Repository;

use App\Entity\TbAssociations;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TbAssociations>
 *
 * @method TbAssociations|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbAssociations|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbAssociations[]    findAll()
 * @method TbAssociations[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbAssociationsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TbAssociations::class);
    }

//    /**
//     * @return TbAssociations[] Returns an array of TbAssociations objects
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

//    public function findOneBySomeField($value): ?TbAssociations
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
