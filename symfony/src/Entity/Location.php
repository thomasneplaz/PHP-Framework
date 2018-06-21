<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Salles;
use App\Entity\User;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LocationRepository")
 */
class Location
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $dateDeb;

    /**
     * @ORM\Column(type="date")
     */
    private $dateFin;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Salles", inversedBy="id")
     * @ORM\JoinColumn(nullable=false)
     */
    private $salle;
    
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="id")
     * @ORM\joinColumn(nullable=false)
     */
    private $client;

    public function getId()
    {
        return $this->id;
    }

    public function getDateDeb()
    {
        return $this->dateDeb;
    }

    public function setDateDeb(\DateTimeInterface $dateDeb): self
    {
        $this->dateDeb = $dateDeb;

        return $this;
    }

    public function getDateFin()
    {
        return $this->dateFin;
    }

    public function setDateFin(\DateTimeInterface $dateFin): self
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    public function setSalle(Salles $salle)
    {
      $this->salle = $salle;
  
      return $this;
    }
  
    public function getSalle()
    {
      return $this->salle;
    }

    public function setClient(User $client)
    {
        $this->client = $client;

        return $this;
    }

    public function getClient()
    {
        return $this->client;
    }
}
