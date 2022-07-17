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



//    public function searchByTitle($word)
//    {
//        //Je fais appelle à la méthode createQueryBuilder
//        // et confère un alias à celle-ci
//      $queryBuilder = $this->createQueryBuilder('book');
//        // Grâce à Doctrine, je vais pouvoir générer une requête SQL
//        //qui va récupérer les données de ma table book
//      $query = $queryBuilder->select('book')
//          ->where('book.title LIKE :word')
//          ->setParameter('word', '%'.$word.'%')
//          ->getQuery();
//        //je demande de récupérer les données SQL et
//        //de me les retourner
//      return $query->getResult();
//    }
}
