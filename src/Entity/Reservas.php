<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservas
 *
 * @ORM\Table(name="reservas", indexes={@ORM\Index(name="idCliente", columns={"idCliente"}), @ORM\Index(name="idHabitacion", columns={"idHabitacion"})})
 * @ORM\Entity(repositoryClass="App\Repository\ReservasRepository")
 */
class Reservas
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
     * @var \DateTime
     *
     * @ORM\Column(name="fechaInicio", type="date", nullable=false)
     */
    private $fechainicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaFin", type="date", nullable=false)
     */
    private $fechafin;

    /**
     * @var int
     *
     * @ORM\Column(name="adultos", type="integer", nullable=false)
     */
    private $adultos;

    /**
     * @var int
     *
     * @ORM\Column(name="infantiles", type="integer", nullable=false)
     */
    private $infantiles;

    /**
     * @var int
     *
     * @ORM\Column(name="mascotas", type="integer", nullable=false)
     */
    private $mascotas;

    /**
     * @var float
     *
     * @ORM\Column(name="precio", type="float", precision=10, scale=0, nullable=false)
     */
    private $precio;

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
     * @var \Clientes
     *
     * @ORM\ManyToOne(targetEntity="Clientes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCliente", referencedColumnName="id", onDelete="CASCADE")
     * })
     */
    private $idcliente;

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

    public function getFechainicio(): ?\DateTimeInterface
    {
        return $this->fechainicio;
    }

    public function setFechainicio(\DateTimeInterface $fechainicio): self
    {
        $this->fechainicio = $fechainicio;

        return $this;
    }

    public function getFechafin(): ?\DateTimeInterface
    {
        return $this->fechafin;
    }

    public function setFechafin(\DateTimeInterface $fechafin): self
    {
        $this->fechafin = $fechafin;

        return $this;
    }

    public function getAdultos(): ?int
    {
        return $this->adultos;
    }

    public function setAdultos(int $adultos): self
    {
        $this->adultos = $adultos;

        return $this;
    }

    public function getInfantiles(): ?int
    {
        return $this->infantiles;
    }

    public function setInfantiles(int $infantiles): self
    {
        $this->infantiles = $infantiles;

        return $this;
    }

    public function getMascotas(): ?int
    {
        return $this->mascotas;
    }

    public function setMascotas(int $mascotas): self
    {
        $this->mascotas = $mascotas;

        return $this;
    }

    public function getPrecio(): ?float
    {
        return $this->precio;
    }

    public function setPrecio(float $precio): self
    {
        $this->precio = $precio;

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

    public function getIdcliente(): ?Clientes
    {
        return $this->idcliente;
    }

    public function setIdcliente(?Clientes $idcliente): self
    {
        $this->idcliente = $idcliente;

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
