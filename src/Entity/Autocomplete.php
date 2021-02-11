<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Autocomplete
 *
 * @ORM\Table(name="autocomplete")
 * @ORM\Entity(repositoryClass="App\Repository\AutocompleteRepository")
 */
class Autocomplete
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
     * @ORM\Column(name="textobusqueda", type="string", length=600, nullable=false)
     */
    private $textobusqueda;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=2, nullable=false)
     */
    private $tipo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin1code", type="string", length=20, nullable=true, options={"default"="NULL"})
     */
    private $admin1code = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin2code", type="string", length=80, nullable=true, options={"default"="NULL"})
     */
    private $admin2code = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin3code", type="string", length=20, nullable=true, options={"default"="NULL"})
     */
    private $admin3code = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin4code", type="string", length=20, nullable=true, options={"default"="NULL"})
     */
    private $admin4code = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="idhospedaje", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $idhospedaje = 'NULL';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTextobusqueda(): ?string
    {
        return $this->textobusqueda;
    }

    public function setTextobusqueda(string $textobusqueda): self
    {
        $this->textobusqueda = $textobusqueda;

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

    public function getAdmin1code(): ?string
    {
        return $this->admin1code;
    }

    public function setAdmin1code(?string $admin1code): self
    {
        $this->admin1code = $admin1code;

        return $this;
    }

    public function getAdmin2code(): ?string
    {
        return $this->admin2code;
    }

    public function setAdmin2code(?string $admin2code): self
    {
        $this->admin2code = $admin2code;

        return $this;
    }

    public function getAdmin3code(): ?string
    {
        return $this->admin3code;
    }

    public function setAdmin3code(?string $admin3code): self
    {
        $this->admin3code = $admin3code;

        return $this;
    }

    public function getAdmin4code(): ?string
    {
        return $this->admin4code;
    }

    public function setAdmin4code(?string $admin4code): self
    {
        $this->admin4code = $admin4code;

        return $this;
    }

    public function getIdhospedaje(): ?int
    {
        return $this->idhospedaje;
    }

    public function setIdhospedaje(?int $idhospedaje): self
    {
        $this->idhospedaje = $idhospedaje;

        return $this;
    }


}
