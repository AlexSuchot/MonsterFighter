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

    public function findPokemonCount()
    {
        return $this->createQueryBuilder('p')
        ->select('count(p.id)')
        ->getQuery()
        ->getResult();
        ;
    }

    public function research($keyword, $col, $order)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.numberPokedex LIKE :val')
            ->orWhere('p.name LIKE :val')
            ->orWhere('p.type LIKE :val')
            ->orWhere('p.life LIKE :val')
            ->orWhere('p.attack LIKE :val')
            ->orWhere('p.defense LIKE :val')
            ->orWhere('p.speed LIKE :val')
            ->setParameter('val', $keyword.'%')
            ->orderBy('p.'.$col, $order)
            ->getQuery()
            ->getResult();
    }
}
