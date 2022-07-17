<?php

namespace App\Repository;

use App\Entity\Argonauteadd;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Argonauteadd>
 *
 * @method Argonauteadd|null find($id, $lockMode = null, $lockVersion = null)
 * @method Argonauteadd|null findOneBy(array $criteria, array $orderBy = null)
 * @method Argonauteadd[]    findAll()
 * @method Argonauteadd[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ArgonauteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Argonauteadd::class);
    }



//    /**
//     * @return Argonauteadd[] Returns an array of Argonauteadd objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('a.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Argonauteadd
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
