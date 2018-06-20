<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SallesRepository")
 */
class Salles
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adress;

    /**
     * @ORM\Column(type="integer")
     */
    private $prix;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $client;

    public function getId()
    {
        return $this->id;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getAdress()
    {
        return $this->adress;
    }

    public function setAdress(string $adress)
    {
        $this->adress = $adress;

        return $this;
    }

    public function getPrix()
    {
        return $this->prix;
    }

    public function setPrix(Integer $prix)
    {
        $this->prix = $prix;

        return $this;
    }
    public function setClient(Client $client)
    {
      $this->client = $client;
  
      return $this;
    }
  
    public function getclient()
    {
      return $this->client;
    }
}
