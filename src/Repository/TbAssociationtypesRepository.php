<?php

namespace App\Repository;

use App\Entity\TbAssociationtypes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TbAssociationtypes>
 *
 * @method TbAssociationtypes|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbAssociationtypes|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbAssociationtypes[]    findAll()
 * @method TbAssociationtypes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbAssociationtypesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TbAssociationtypes::class);
    }

//    /**
//     * @return TbAssociationtypes[] Returns an array of TbAssociationtypes objects
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

//    public function findOneBySomeField($value): ?TbAssociationtypes
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
