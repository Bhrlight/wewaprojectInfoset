<?php

namespace App\Repository;

use App\Entity\TbPrograms;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TbPrograms>
 *
 * @method TbPrograms|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbPrograms|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbPrograms[]    findAll()
 * @method TbPrograms[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbProgramsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TbPrograms::class);
    }

//    /**
//     * @return TbPrograms[] Returns an array of TbPrograms objects
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

//    public function findOneBySomeField($value): ?TbPrograms
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
