<?php

namespace App\Repository;

use App\Entity\ArrayRatingPost;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ArrayRatingPost>
 *
 * @method ArrayRatingPost|null find($id, $lockMode = null, $lockVersion = null)
 * @method ArrayRatingPost|null findOneBy(array $criteria, array $orderBy = null)
 * @method ArrayRatingPost[]    findAll()
 * @method ArrayRatingPost[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ArrayRatingPostRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ArrayRatingPost::class);
    }

//    /**
//     * @return ArrayRatingPost[] Returns an array of ArrayRatingPost objects
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

//    public function findOneBySomeField($value): ?ArrayRatingPost
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}