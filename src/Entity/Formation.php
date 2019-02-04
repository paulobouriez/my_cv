<?php
namespace app\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity (repositoryClass="AppBundle\Repository\FormationRepository")
 * @ORM\Table (name="app_user")
 */

class Formation
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
    private $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $years;

    public function getYears(): ?string
    {
        return $this->years;
    }

    public function setYears(?string $years): self
    {
        $this->years = $years;

        return $this;
    }

}

