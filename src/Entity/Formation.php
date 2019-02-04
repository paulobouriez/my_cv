<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity (repositoryClass="App\Repository\FormationRepository")
 * @ORM\Table (name="formation")
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
    private $Name;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $DateStart;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $DateEnd;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Place;
        /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */


    public function getDateStart(): ?\DateTimeInterface
    {
        return $this->DateStart;
    }

    public function setDateStart(?\DateTimeInterface $DateStart): self
    {
        $this->DateStart = $DateStart;

        return $this;
    }
    
    

    public function getDateEnd(): ?\DateTimeInterface
    {
        return $this->DateEnd;
    }

    public function setDateEnd(?\DateTimeInterface $DateEnd): self
    {
        $this->DateEnd = $DateEnd;

        return $this;
    }
    

    public function getPlace(): ?string
    {
        return $this->Place;
    }

    public function setPlace(?string $Place): self
    {
        $this->Place = $Place;

        return $this;
    }

    
    
        public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(?string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }


}

