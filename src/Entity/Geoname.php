<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Geoname
 *
 * @ORM\Table(name="geoname")
 * @ORM\Entity(repositoryClass="App\Repository\GeonameRepository")
 */
class Geoname
{
    /**
     * @var int
     *
     * @ORM\Column(name="geonameid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $geonameid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=200, nullable=true, options={"default"="NULL"})
     */
    private $name = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="asciiname", type="string", length=200, nullable=true, options={"default"="NULL"})
     */
    private $asciiname = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="alternatenames", type="string", length=10000, nullable=true, options={"default"="NULL"})
     */
    private $alternatenames = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="latitude", type="decimal", precision=10, scale=5, nullable=true, options={"default"="NULL"})
     */
    private $latitude = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="altitude", type="decimal", precision=10, scale=5, nullable=true, options={"default"="NULL"})
     */
    private $altitude = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="featureclass", type="string", length=1, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $featureclass = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="featurecode", type="string", length=10, nullable=true, options={"default"="NULL"})
     */
    private $featurecode = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="countrycode", type="string", length=2, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $countrycode = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="cc2", type="string", length=200, nullable=true, options={"default"="NULL"})
     */
    private $cc2 = 'NULL';

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
     * @ORM\Column(name="population", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $population = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="elevation", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $elevation = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="dem", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $dem = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="timezone", type="string", length=40, nullable=true, options={"default"="NULL"})
     */
    private $timezone = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="modificationdate", type="date", nullable=true, options={"default"="NULL"})
     */
    private $modificationdate = 'NULL';

    public function getGeonameid(): ?int
    {
        return $this->geonameid;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getAsciiname(): ?string
    {
        return $this->asciiname;
    }

    public function setAsciiname(?string $asciiname): self
    {
        $this->asciiname = $asciiname;

        return $this;
    }

    public function getAlternatenames(): ?string
    {
        return $this->alternatenames;
    }

    public function setAlternatenames(?string $alternatenames): self
    {
        $this->alternatenames = $alternatenames;

        return $this;
    }

    public function getLatitude(): ?string
    {
        return $this->latitude;
    }

    public function setLatitude(?string $latitude): self
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getAltitude(): ?string
    {
        return $this->altitude;
    }

    public function setAltitude(?string $altitude): self
    {
        $this->altitude = $altitude;

        return $this;
    }

    public function getFeatureclass(): ?string
    {
        return $this->featureclass;
    }

    public function setFeatureclass(?string $featureclass): self
    {
        $this->featureclass = $featureclass;

        return $this;
    }

    public function getFeaturecode(): ?string
    {
        return $this->featurecode;
    }

    public function setFeaturecode(?string $featurecode): self
    {
        $this->featurecode = $featurecode;

        return $this;
    }

    public function getCountrycode(): ?string
    {
        return $this->countrycode;
    }

    public function setCountrycode(?string $countrycode): self
    {
        $this->countrycode = $countrycode;

        return $this;
    }

    public function getCc2(): ?string
    {
        return $this->cc2;
    }

    public function setCc2(?string $cc2): self
    {
        $this->cc2 = $cc2;

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

    public function getPopulation(): ?int
    {
        return $this->population;
    }

    public function setPopulation(?int $population): self
    {
        $this->population = $population;

        return $this;
    }

    public function getElevation(): ?int
    {
        return $this->elevation;
    }

    public function setElevation(?int $elevation): self
    {
        $this->elevation = $elevation;

        return $this;
    }

    public function getDem(): ?int
    {
        return $this->dem;
    }

    public function setDem(?int $dem): self
    {
        $this->dem = $dem;

        return $this;
    }

    public function getTimezone(): ?string
    {
        return $this->timezone;
    }

    public function setTimezone(?string $timezone): self
    {
        $this->timezone = $timezone;

        return $this;
    }

    public function getModificationdate(): ?\DateTimeInterface
    {
        return $this->modificationdate;
    }

    public function setModificationdate(?\DateTimeInterface $modificationdate): self
    {
        $this->modificationdate = $modificationdate;

        return $this;
    }


}
