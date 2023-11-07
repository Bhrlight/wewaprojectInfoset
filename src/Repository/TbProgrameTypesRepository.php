<?php

namespace App\Repository;

use App\Entity\TbProgrameTypes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TbProgrameTypes>
 *
 * @method TbProgrameTypes|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbProgrameTypes|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbProgrameTypes[]    findAll()
 * @method TbProgrameTypes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbProgrameTypesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TbProgrameTypes::class);
    }

//    /**
//     * @return TbProgrameTypes[] Returns an array of TbProgrameTypes objects
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

//    public function findOneBySomeField($value): ?TbProgrameTypes
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
