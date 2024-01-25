<?php

namespace App\Repository;

use App\Entity\Allie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Allie>
 *
 * @method Allie|null find($id, $lockMode = null, $lockVersion = null)
 * @method Allie|null findOneBy(array $criteria, array $orderBy = null)
 * @method Allie[]    findAll()
 * @method Allie[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AllieRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Allie::class);
    }

//    /**
//     * @return Allie[] Returns an array of Allie objects
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

//    public function findOneBySomeField($value): ?Allie
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
