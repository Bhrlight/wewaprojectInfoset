<?php

namespace App\Repository;

use App\Entity\TbMembreTypes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TbMembreTypes>
 *
 * @method TbMembreTypes|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbMembreTypes|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbMembreTypes[]    findAll()
 * @method TbMembreTypes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbMembreTypesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TbMembreTypes::class);
    }

//    /**
//     * @return TbMembreTypes[] Returns an array of TbMembreTypes objects
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

//    public function findOneBySomeField($value): ?TbMembreTypes
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
