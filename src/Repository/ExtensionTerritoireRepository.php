<?php

namespace App\Repository;

use App\Entity\ExtensionTerritoire;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ExtensionTerritoire>
 *
 * @method ExtensionTerritoire|null find($id, $lockMode = null, $lockVersion = null)
 * @method ExtensionTerritoire|null findOneBy(array $criteria, array $orderBy = null)
 * @method ExtensionTerritoire[]    findAll()
 * @method ExtensionTerritoire[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ExtensionTerritoireRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ExtensionTerritoire::class);
    }

//    /**
//     * @return ExtensionTerritoire[] Returns an array of ExtensionTerritoire objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('e.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ExtensionTerritoire
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
