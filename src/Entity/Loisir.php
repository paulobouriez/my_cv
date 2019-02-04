<?php
namespace app\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity (repositoryClass="AppBundle\Repository\FormationRepository")
 * @ORM\Table (name="app_user")
 */

class Loisir
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
     * @ORM\Column(type="string", length=255)
     */
    private $skill;

    public function getSkill(): ?string
    {
        return $this->skill;
    }

    public function setSkill(string $skill): self
    {
        $this->skill = $skill;

        return $this;
    }

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */






}
