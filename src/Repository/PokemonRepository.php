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
     * @param $keyword
     * @param $col
     * @param $order
     * @return mixed
     */
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

    public function research($keyword, $col, $order)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.numberPokedex LIKE :val')
            ->orWhere('a.name LIKE :val')
            ->orWhere('a.type LIKE :val')
            ->orWhere('a.life LIKE :val')
            ->orWhere('a.attack LIKE :val')
            ->orWhere('a.defense LIKE :val')
            ->orWhere('a.speed LIKE :val')
            ->setParameter('val', $keyword.'%')
            ->orderBy('a.'.$col, $order)
            ->getQuery()
            ->getResult();
    } 
}
