<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Multimedia
 *
 * @ORM\Table(name="multimedia", indexes={@ORM\Index(name="idHabitacion", columns={"idHabitacion"})})
 * @ORM\Entity(repositoryClass="App\Repository\MultimediaRepository")
 */
class Multimedia
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombrefichero", type="string", length=100, nullable=false)
     */
    private $nombrefichero;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=50, nullable=false)
     */
    private $tipo;

    /**
     * @var bool
     *
     * @ORM\Column(name="principal", type="boolean", nullable=false)
     */
    private $principal = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaCreacion", type="date", nullable=false)
     */
    private $fechacreacion;

    /**
     * @var bool
     *
     * @ORM\Column(name="activo", type="boolean", nullable=false)
     */
    private $activo = '0';

    /**
     * @var \Habitaciones
     *
     * @ORM\ManyToOne(targetEntity="Habitaciones")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idHabitacion", referencedColumnName="id", onDelete="CASCADE")
     * })
     */
    private $idhabitacion;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombrefichero(): ?string
    {
        return $this->nombrefichero;
    }

    public function setNombrefichero(string $nombrefichero): self
    {
        $this->nombrefichero = $nombrefichero;

        return $this;
    }

    public function getTipo(): ?string
    {
        return $this->tipo;
    }

    public function setTipo(string $tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }

    public function getPrincipal(): ?bool
    {
        return $this->principal;
    }

    public function setPrincipal(bool $principal): self
    {
        $this->principal = $principal;

        return $this;
    }

    public function getFechacreacion(): ?\DateTimeInterface
    {
        return $this->fechacreacion;
    }

    public function setFechacreacion(\DateTimeInterface $fechacreacion): self
    {
        $this->fechacreacion = $fechacreacion;

        return $this;
    }

    public function getActivo(): ?bool
    {
        return $this->activo;
    }

    public function setActivo(bool $activo): self
    {
        $this->activo = $activo;

        return $this;
    }

    public function getIdhabitacion(): ?Habitaciones
    {
        return $this->idhabitacion;
    }

    public function setIdhabitacion(?Habitaciones $idhabitacion): self
    {
        $this->idhabitacion = $idhabitacion;

        return $this;
    }


}
