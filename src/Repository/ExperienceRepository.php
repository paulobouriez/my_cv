<?php
namespace App\Repository;
use App\Entity\Experience;
use Doctrine\ORM\EntityRepository;

/**
 * Experience repository.
 */
class ExperienceRepository extends EntityRepository
{
    /**
     * Find ...
     */
    public function findAllExperience()
        {
            $qBuilder = $this
                ->getEntityManager()
                ->createQueryBuilder();
            
            $qBuilder->select('f');
            $qBuilder->from('AppBundle:Experience','f');
            
            $result = $qBuilder->getQuery()->getResult();
            
            return $result;
        }
}