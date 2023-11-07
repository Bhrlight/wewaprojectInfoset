<?php

namespace App\Repository;

use App\Entity\TbRoles;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TbRoles>
 *
 * @method TbRoles|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbRoles|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbRoles[]    findAll()
 * @method TbRoles[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbRolesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TbRoles::class);
    }

//    /**
//     * @return TbRoles[] Returns an array of TbRoles objects
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

//    public function findOneBySomeField($value): ?TbRoles
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
