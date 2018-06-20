<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ModuleSalleRepository")
 */
class ModuleSalle
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
    private $idSalle;

    /**
     * @ORM\Column(type="integer")
     */
    private $idModule;

    public function getId()
    {
        return $this->id;
    }

    public function getIdSalle()
    {
        return $this->idSalle;
    }

    public function setIdSalle(int $idSalle): self
    {
        $this->idSalle = $idSalle;

        return $this;
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
}
