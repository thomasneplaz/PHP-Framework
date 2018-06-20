<?php

namespace App\Repository;

use App\Entity\ModuleLocation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ModuleLocation|null find($id, $lockMode = null, $lockVersion = null)
 * @method ModuleLocation|null findOneBy(array $criteria, array $orderBy = null)
 * @method ModuleLocation[]    findAll()
 * @method ModuleLocation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ModuleLocationRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ModuleLocation::class);
    }

//    /**
//     * @return ModuleLocation[] Returns an array of ModuleLocation objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ModuleLocation
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
