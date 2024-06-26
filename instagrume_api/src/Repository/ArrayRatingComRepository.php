<?php

namespace App\Repository;

use App\Entity\ArrayRatingCom;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ArrayRatingCom>
 *
 * @method ArrayRatingCom|null find($id, $lockMode = null, $lockVersion = null)
 * @method ArrayRatingCom|null findOneBy(array $criteria, array $orderBy = null)
 * @method ArrayRatingCom[]    findAll()
 * @method ArrayRatingCom[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ArrayRatingComRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ArrayRatingCom::class);
    }

//    /**
//     * @return ArrayRatingCom[] Returns an array of ArrayRatingCom objects
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

//    public function findOneBySomeField($value): ?ArrayRatingCom
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
