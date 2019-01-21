<?php
namespace App\Repository;

use App\Entity\AlmibarenWormsHatsAlmibarenWormsImagesRel;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class AlmibarenLibreria extends ServiceEntityRepository
{

    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, AlmibarenWormsHatsAlmibarenWormsImagesRel::class);
    }

    public function findAllByIdGorro($idGorro): array
    {
        $entityManager = $this->getEntityManager();

        $queryBuilder = $entityManager->createQueryBuilder();
        $queryBuilder
            ->select('i')
            ->from('App\Entity\AlmibarenWormsImages', 'i')
            ->innerJoin('App\Entity\AlmibarenWormsHatsAlmibarenWormsImagesRel', 'r', 'WITH', 'r.almibarenWormsImages = i.id')
            ->where('i.id = :idGorro')
            ->setParameter('idGorro','%'.$idGorro.'%');


        $query = $entityManager->createQuery(
            "select i.path from App\Entity\AlmibarenWormsImages i inner join App\Entity\AlmibarenWormsHatsAlmibarenWormsImagesRel r with r.almibarenWormsImages = i.id where r.almibarenWormsHats = :idGorro"
        )->setParameters(array('idGorro'=>$idGorro));



        return $query->execute();
    }

}