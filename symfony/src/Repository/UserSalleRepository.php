<?php

namespace App\Repository;

use App\Entity\UserSalle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method UserSalle|null find($id, $lockMode = null, $lockVersion = null)
 * @method UserSalle|null findOneBy(array $criteria, array $orderBy = null)
 * @method UserSalle[]    findAll()
 * @method UserSalle[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserSalleRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, UserSalle::class);
    }

//    /**
//     * @return UserSalle[] Returns an array of UserSalle objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?UserSalle
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
