<?php

namespace App\Repository;

use App\Entity\Addressbook;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Addressbook|null find($id, $lockMode = null, $lockVersion = null)
 * @method Addressbook|null findOneBy(array $criteria, array $orderBy = null)
 * @method Addressbook[]    findAll()
 * @method Addressbook[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AddressbookRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Addressbook::class);
    }

    // /**
    //  * @return Addressbook[] Returns an array of Addressbook objects
    //  */
    
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    

    /*
    public function findOneBySomeField($value): ?Addressbook
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
