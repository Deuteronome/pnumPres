<?php

namespace App\Repository;

use App\Entity\NavItems;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<NavItems>
 *
 * @method NavItems|null find($id, $lockMode = null, $lockVersion = null)
 * @method NavItems|null findOneBy(array $criteria, array $orderBy = null)
 * @method NavItems[]    findAll()
 * @method NavItems[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NavItemsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NavItems::class);
    }

//    /**
//     * @return NavItems[] Returns an array of NavItems objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('n')
//            ->andWhere('n.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('n.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?NavItems
//    {
//        return $this->createQueryBuilder('n')
//            ->andWhere('n.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
