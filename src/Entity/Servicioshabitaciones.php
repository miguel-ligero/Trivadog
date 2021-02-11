<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Servicioshabitaciones
 *
 * @ORM\Table(name="servicioshabitaciones", indexes={@ORM\Index(name="idHabitacion", columns={"idHabitacion", "idServicio"}), @ORM\Index(name="servhab.serv", columns={"idServicio"}), @ORM\Index(name="IDX_4313BF4E76AD8B50", columns={"idHabitacion"})})
 * @ORM\Entity(repositoryClass="App\Repository\ServicioshabitacionesRepository")
 */
class Servicioshabitaciones
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

    /**
     * @var \Servicios
     *
     * @ORM\ManyToOne(targetEntity="Servicios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idServicio", referencedColumnName="id", onDelete="CASCADE")
     * })
     */
    private $idservicio;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getIdservicio(): ?Servicios
    {
        return $this->idservicio;
    }

    public function setIdservicio(?Servicios $idservicio): self
    {
        $this->idservicio = $idservicio;

        return $this;
    }


}
