<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ModuleLocationRepository")
 */
class ModuleLocation
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $idModule;

    /**
     * @ORM\Column(type="integer")
     */
    private $idLocation;

    public function getId()
    {
        return $this->id;
    }

    public function getIdModule()
    {
        return $this->idModule;
    }

    public function setIdModule(int $idModule): self
    {
        $this->idModule = $idModule;

        return $this;
    }

    public function getIdLocation()
    {
        return $this->idLocation;
    }

    public function setIdLocation(int $idLocation): self
    {
        $this->idLocation = $idLocation;

        return $this;
    }
}
