<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ORM\Entity(repositoryClass="App\Repository\HojaVidaRepository")
 * @ApiResource()
 *
 */
class HojaVida
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nombreCompleto;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $telefono;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $escuela;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $colegio;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $universidad;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $idiomas;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $otrosConocimientos;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $numeroCedula;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $sexo;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nacionalidad;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $descripcion;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $fechaNacimiento;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ciudad;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $direccion;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombreCompleto(): ?string
    {
        return $this->nombreCompleto;
    }

    public function setNombreCompleto(string $nombreCompleto): self
    {
        $this->nombreCompleto = $nombreCompleto;

        return $this;
    }

    public function getTelefono(): ?string
    {
        return $this->telefono;
    }

    public function setTelefono(?string $telefono): self
    {
        $this->telefono = $telefono;

        return $this;
    }

    public function getEscuela(): ?string
    {
        return $this->escuela;
    }

    public function setEscuela(string $escuela): self
    {
        $this->escuela = $escuela;

        return $this;
    }

    public function getColegio(): ?string
    {
        return $this->colegio;
    }

    public function setColegio(string $colegio): self
    {
        $this->colegio = $colegio;

        return $this;
    }

    public function getUniversidad(): ?string
    {
        return $this->universidad;
    }

    public function setUniversidad(string $universidad): self
    {
        $this->universidad = $universidad;

        return $this;
    }

    public function getIdiomas(): ?string
    {
        return $this->idiomas;
    }

    public function setIdiomas(?string $idiomas): self
    {
        $this->idiomas = $idiomas;

        return $this;
    }

    public function getOtrosConocimientos(): ?string
    {
        return $this->otrosConocimientos;
    }

    public function setOtrosConocimientos(?string $otrosConocimientos): self
    {
        $this->otrosConocimientos = $otrosConocimientos;

        return $this;
    }

    public function getNumeroCedula(): ?string
    {
        return $this->numeroCedula;
    }

    public function setNumeroCedula(string $numeroCedula): self
    {
        $this->numeroCedula = $numeroCedula;

        return $this;
    }

    public function getSexo(): ?string
    {
        return $this->sexo;
    }

    public function setSexo(?string $sexo): self
    {
        $this->sexo = $sexo;

        return $this;
    }

    public function getNacionalidad(): ?string
    {
        return $this->nacionalidad;
    }

    public function setNacionalidad(?string $nacionalidad): self
    {
        $this->nacionalidad = $nacionalidad;

        return $this;
    }


    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(?string $descripcion): self
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function getFechaNacimiento(): ?string
    {
        return $this->fechaNacimiento;
    }

    public function setFechaNacimiento(string $fechaNacimiento): self
    {
        $this->fechaNacimiento = $fechaNacimiento;

        return $this;
    }

    public function getCiudad(): ?string
    {
        return $this->ciudad;
    }

    public function setCiudad(?string $ciudad): self
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    public function getDireccion(): ?string
    {
        return $this->direccion;
    }

    public function setDireccion(?string $direccion): self
    {
        $this->direccion = $direccion;

        return $this;
    }
}
