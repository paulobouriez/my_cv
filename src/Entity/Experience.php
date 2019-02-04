<?php
namespace app\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity (repositoryClass="AppBundle\Repository\FormationRepository")
 * @ORM\Table (name="app_user")
 */

class Experience
{
 /**
     * @ORM\Id
     * @ORM\Column (type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @var string
     * 
     * @ORM\Column (type="string", name="name")
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */





}
