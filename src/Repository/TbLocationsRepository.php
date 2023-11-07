<?php

namespace App\Repository;

use App\Entity\TbLocations;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TbLocations>
 *
 * @method TbLocations|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbLocations|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbLocations[]    findAll()
 * @method TbLocations[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbLocationsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TbLocations::class);
    }

//    /**
//     * @return TbLocations[] Returns an array of TbLocations objects
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

//    public function findOneBySomeField($value): ?TbLocations
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
