<?php

namespace App\Repository;

use App\Entity\SortieComment;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method SortieComment|null find($id, $lockMode = null, $lockVersion = null)
 * @method SortieComment|null findOneBy(array $criteria, array $orderBy = null)
 * @method SortieComment[]    findAll()
 * @method SortieComment[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SortieCommentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SortieComment::class);
    }

    // /**
    //  * @return SortieComment[] Returns an array of SortieComment objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SortieComment
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
