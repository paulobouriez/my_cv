<?php
namespace App\Repository;
use App\Entity\Formation;
use Doctrine\ORM\EntityRepository;

/**
 * Formation repository.
 */
class FormationRepository extends EntityRepository
{
    /**
     * Find ...
     */
    public function findAllFormation()
        {
            $qBuilder = $this
                ->getEntityManager()
                ->createQueryBuilder();
            
            $qBuilder->select('f');
            $qBuilder->from('AppBundle:Formation','f');
            
            $result = $qBuilder->getQuery()->getResult();
            
            return $result;
        }
}