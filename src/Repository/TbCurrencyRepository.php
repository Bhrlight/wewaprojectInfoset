<?php

namespace App\Repository;

use App\Entity\TbCurrency;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TbCurrency>
 *
 * @method TbCurrency|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbCurrency|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbCurrency[]    findAll()
 * @method TbCurrency[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbCurrencyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TbCurrency::class);
    }

//    /**
//     * @return TbCurrency[] Returns an array of TbCurrency objects
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

//    public function findOneBySomeField($value): ?TbCurrency
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
