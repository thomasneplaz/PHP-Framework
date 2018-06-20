<?php

namespace App\Repository;

use App\Entity\ModuleSalle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ModuleSalle|null find($id, $lockMode = null, $lockVersion = null)
 * @method ModuleSalle|null findOneBy(array $criteria, array $orderBy = null)
 * @method ModuleSalle[]    findAll()
 * @method ModuleSalle[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ModuleSalleRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ModuleSalle::class);
    }

//    /**
//     * @return ModuleSalle[] Returns an array of ModuleSalle objects
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
    public function findOneBySomeField($value): ?ModuleSalle
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
