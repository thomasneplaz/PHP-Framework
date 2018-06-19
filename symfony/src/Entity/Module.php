<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ModuleRepository")
 */
class Module
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $idModule;



    /**
     * @ORM\Column(type="string", length=50)
     */
    private $libelleModule;

    /**
     * @ORM\Column(type="float")
     */
    private $prixModule;

    public function getId()
    {
        return $this->idModule;
    }

    public function setIdmodule(int $idmodule): self
    {
        $this->idmodule = $idmodule;

        return $this;
    }

    public function getLibelleModule(): ?string
    {
        return $this->libelleModule;
    }

    public function setLibelleModule(string $libelleModule): self
    {
        $this->libelleModule = $libelleModule;

        return $this;
    }

    public function getPrixModule(): ?float
    {
        return $this->prixModule;
    }

    public function setPrixModule(float $prixModule): self
    {
        $this->prixModule = $prixModule;

        return $this;
    }
}
