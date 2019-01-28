<?php
namespace App\Repository;

use App\Entity\AlmibarenWormsUser;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class AlmibarenUsuario extends ServiceEntityRepository
{

    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, AlmibarenWormsUser::class);
    }

    public function findUsuarioByCredentials($user,$pass): array
    {
        $entityManager = $this->getEntityManager();
        $querybuilder=$entityManager->createQueryBuilder()->select('u.id')->from('App\Entity\AlmibarenWormsUser','u')->where('u.username = :username and u.password = :pass')->setParameters(array('username'=>$user,'pass'=>$pass));

        return $querybuilder->getQuery()->execute();
    }

    public function findGorrosByUsuario($idUsuario): array
    {
        $entityManager = $this->getEntityManager();
        $querybuilder=$entityManager->createQueryBuilder()->select('g')->from('App\Entity\AlmibarenWormsHats','g')->innerJoin('App\Entity\AlmibarenWormsHatsAlmibarenWormsUserRel','r','WITH','r.almibarenWormsHats=g.id')->innerJoin('\App\Entity\AlmibarenWormsUser','u','WITH','r.almibarenWormsUser=u.id')->where('u.id = :id')->setParameters(array('id'=>$idUsuario));

        return $querybuilder->getQuery()->execute();
    }

}