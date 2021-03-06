<?php

namespace FeladatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Countries
 *
 * @ORM\Table(name="countries", uniqueConstraints={@ORM\UniqueConstraint(name="countryName", columns={"countryName"}), @ORM\UniqueConstraint(name="countryName_2", columns={"countryName"}), @ORM\UniqueConstraint(name="countryName_3", columns={"countryName"})})
 * @ORM\Entity
 */
class Countries {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="countryCode", type="string", length=2, nullable=false)
     */
    private $countrycode = '';

    /**
     * @var string
     *
     * @ORM\Column(name="countryName", type="string", length=45, nullable=false)
     */
    private $countryname = '';

    /**
     * @ORM\OneToMany(targetEntity="Telephely", mappedBy="orszag")   
     */
    protected $telephelyek;
    
    /**
     * @ORM\OneToMany(targetEntity="Partner", mappedBy="szekhelyCimOrszag")
     * @ORM\OneToMany(targetEntity="Partner", mappedBy="szamlazasiCimOrszag")
     * @ORM\OneToMany(targetEntity="Partner", mappedBy="postazasiCimOrszag")
     */
    protected $countries;

    public function __construct() {
        $this->telephelyek = new ArrayCollection();
        $this->countries = new ArrayCollection();
    }

    public function __toString() {
        return "{$this->getCountryname()}";
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set countrycode
     *
     * @param string $countrycode
     *
     * @return Countries
     */
    public function setCountrycode($countrycode) {
        $this->countrycode = $countrycode;

        return $this;
    }

    /**
     * Get countrycode
     *
     * @return string
     */
    public function getCountrycode() {
        return $this->countrycode;
    }

    /**
     * Set countryname
     *
     * @param string $countryname
     *
     * @return Countries
     */
    public function setCountryname($countryname) {
        $this->countryname = $countryname;

        return $this;
    }

    /**
     * Get countryname
     *
     * @return string
     */
    public function getCountryname() {
        return $this->countryname;
    }


    /**
     * Add telephelyek
     *
     * @param \FeladatBundle\Entity\Telephely $telephelyek
     *
     * @return Countries
     */
    public function addTelephelyek(\FeladatBundle\Entity\Telephely $telephelyek)
    {
        $this->telephelyek[] = $telephelyek;

        return $this;
    }

    /**
     * Remove telephelyek
     *
     * @param \FeladatBundle\Entity\Telephely $telephelyek
     */
    public function removeTelephelyek(\FeladatBundle\Entity\Telephely $telephelyek)
    {
        $this->telephelyek->removeElement($telephelyek);
    }

    /**
     * Get telephelyek
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTelephelyek()
    {
        return $this->telephelyek;
    }

    /**
     * Add country
     *
     * @param \FeladatBundle\Entity\Partner $country
     *
     * @return Countries
     */
    public function addCountry(\FeladatBundle\Entity\Partner $country)
    {
        $this->countries[] = $country;

        return $this;
    }

    /**
     * Remove country
     *
     * @param \FeladatBundle\Entity\Partner $country
     */
    public function removeCountry(\FeladatBundle\Entity\Partner $country)
    {
        $this->countries->removeElement($country);
    }

    /**
     * Get countries
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCountries()
    {
        return $this->countries;
    }
}
