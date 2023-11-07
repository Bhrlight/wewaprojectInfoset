<?php

namespace App\Repository;

use App\Entity\TbPrivileges;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TbPrivileges>
 *
 * @method TbPrivileges|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbPrivileges|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbPrivileges[]    findAll()
 * @method TbPrivileges[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbPrivilegesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TbPrivileges::class);
    }

//    /**
//     * @return TbPrivileges[] Returns an array of TbPrivileges objects
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

//    public function findOneBySomeField($value): ?TbPrivileges
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
