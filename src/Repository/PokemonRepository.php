<?php

namespace App\Repository;

use App\Entity\Pokemon;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Pokemon|null find($id, $lockMode = null, $lockVersion = null)
 * @method Pokemon|null findOneBy(array $criteria, array $orderBy = null)
 * @method Pokemon[]    findAll()
 * @method Pokemon[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PokemonRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Pokemon::class);
    }

    /**
     * @param $numberPokedex
     * @return mixed
     */
    public function findByNumberPokedex($numberPokedex)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.numberPokedex = :val')
            ->setParameter('val', $numberPokedex)
            ->setMaxResults(1)
            ->getQuery()
            ->getResult()
        ;
    }
    public function findTeamByNumberPokedex($numberPokedex)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.numberPokedex = :val')
            ->setParameter('val', $numberPokedex)
            ->setMaxResults(1)
            ->getQuery()
            ->getResult()
            ;
    }
}
