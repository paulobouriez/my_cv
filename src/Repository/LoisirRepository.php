<?php
namespace App\Repository;
use App\Entity\Loisir;
use Doctrine\ORM\EntityRepository;

/**
 * Loisir repository.
 */
class LoisirRepository extends EntityRepository
{
    /**
     * Find ...
     */
    public function findAllLoisir()
        {
            $qBuilder = $this
                ->getEntityManager()
                ->createQueryBuilder();
            
            $qBuilder->select('f');
            $qBuilder->from('AppBundle:Loisir','f');
            
            $result = $qBuilder->getQuery()->getResult();
            
            return $result;
        }
}