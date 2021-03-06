<?php

namespace FeladatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Telephely
 *
 * @ORM\Table(name="telephely", indexes={@ORM\Index(name="orszag", columns={"orszag"}), @ORM\Index(name="orszag_2", columns={"orszag"})})
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks()
 */
class Telephely
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \FeladatBundle\Entity\Partner
     *
     @ORM\ManyToOne(targetEntity="FeladatBundle\Entity\Partner", inversedBy="telephelyek")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="partner", referencedColumnName="id")
     * })
     */
    private $partner;

    /**
     * @var string
     *
     * @ORM\Column(name="nev", type="string", length=255, nullable=false)
     */
    private $nev;

    /**
     * @var integer
     *
     * @ORM\Column(name="irsz", type="integer", nullable=false)
     */
    private $irsz;

    /**
     * @var string
     *
     * @ORM\Column(name="telepules", type="string", length=255, nullable=false)
     */
    private $telepules;

    /**
     * @var string
     *
     * @ORM\Column(name="kozter", type="string", length=255, nullable=false)
     */
    private $kozter;

    /**
     * @var integer
     *
     * @ORM\Column(name="hazsz", type="integer", nullable=false)
     */
    private $hazsz;

    /**
     * @var integer
     *
     * @ORM\Column(name="telefon", type="integer", nullable=false)
     */
    private $telefon;

    /**
     * @var integer
     *
     * @ORM\Column(name="fax", type="integer", nullable=false)
     */
    private $fax;

    /**
     * @var integer
     *
     * @ORM\Column(name="mobil", type="integer", nullable=false)
     */
    private $mobil;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;
    
    /**
     * @ORM\Column(type="boolean")
     */
    private $alapertelmezett;

    /**
     * @var string
     *
     * @ORM\Column(name="megjegyzes", type="string", length=255, nullable=false)
     */
    private $megjegyzes;

    /**
     * @var string
     *
     * @ORM\Column(name="letrehozva", type="string", length=25, nullable=false)
     */
    private $letrehozva;

    /**
     * @var string
     *
     * @ORM\Column(name="letrehozo", type="string", length=255, nullable=false)
     */
    private $letrehozo;

    /**
     * @var string
     *
     * @ORM\Column(name="modositva", type="string", length=25, nullable=false)
     */
    private $modositva;

    /**
     * @var string
     *
     * @ORM\Column(name="modosito", type="string", length=255, nullable=false)
     */
    private $modosito;

    /**
     * @var \FeladatBundle\Entity\Countries
     *
     * @ORM\ManyToOne(targetEntity="FeladatBundle\Entity\Countries", inversedBy="telephelyek")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="orszag", referencedColumnName="id")
     * })
     */
    protected $orszag;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set partner
     *
     * @param string $partner
     *
     * @return Telephely
     */
    public function setPartner(\FeladatBundle\Entity\Partner $partner = null)
    {
        $this->partner = $partner;

        return $this;
    }

    /**
     * Get partner
     *
     * @return string
     */
    public function getPartner()
    {
        return $this->partner;
    }

    /**
     * Set nev
     *
     * @param string $nev
     *
     * @return Telephely
     */
    public function setNev($nev)
    {
        $this->nev = $nev;

        return $this;
    }

    /**
     * Get nev
     *
     * @return string
     */
    public function getNev()
    {
        return $this->nev;
    }

    /**
     * Set irsz
     *
     * @param integer $irsz
     *
     * @return Telephely
     */
    public function setIrsz($irsz)
    {
        $this->irsz = $irsz;

        return $this;
    }

    /**
     * Get irsz
     *
     * @return integer
     */
    public function getIrsz()
    {
        return $this->irsz;
    }

    /**
     * Set telepules
     *
     * @param string $telepules
     *
     * @return Telephely
     */
    public function setTelepules($telepules)
    {
        $this->telepules = $telepules;

        return $this;
    }

    /**
     * Get telepules
     *
     * @return string
     */
    public function getTelepules()
    {
        return $this->telepules;
    }

    /**
     * Set kozter
     *
     * @param string $kozter
     *
     * @return Telephely
     */
    public function setKozter($kozter)
    {
        $this->kozter = $kozter;

        return $this;
    }

    /**
     * Get kozter
     *
     * @return string
     */
    public function getKozter()
    {
        return $this->kozter;
    }

    /**
     * Set hazsz
     *
     * @param integer $hazsz
     *
     * @return Telephely
     */
    public function setHazsz($hazsz)
    {
        $this->hazsz = $hazsz;

        return $this;
    }

    /**
     * Get hazsz
     *
     * @return integer
     */
    public function getHazsz()
    {
        return $this->hazsz;
    }

    /**
     * Set telefon
     *
     * @param integer $telefon
     *
     * @return Telephely
     */
    public function setTelefon($telefon)
    {
        $this->telefon = $telefon;

        return $this;
    }

    /**
     * Get telefon
     *
     * @return integer
     */
    public function getTelefon()
    {
        return $this->telefon;
    }

    /**
     * Set fax
     *
     * @param integer $fax
     *
     * @return Telephely
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return integer
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set mobil
     *
     * @param integer $mobil
     *
     * @return Telephely
     */
    public function setMobil($mobil)
    {
        $this->mobil = $mobil;

        return $this;
    }

    /**
     * Get mobil
     *
     * @return integer
     */
    public function getMobil()
    {
        return $this->mobil;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Telephely
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }
    
    /**
     * Set alapertelmezett
     * 
     * @return Telephely
     */
    public function setAlapertelmezett($alapertelmezett)
    {
        $this->alapertelmezett = $alapertelmezett;
        
        return $this;
    }
    
    /**
     * Get alapertelmezett
     * 
     * @return boolean
     */
    public function getAlapertelmezett()
    {
        return $this->alapertelmezett;
    }

    /**
     * Set megjegyzes
     *
     * @param string $megjegyzes
     *
     * @return Telephely
     */
    public function setMegjegyzes($megjegyzes)
    {
        $this->megjegyzes = $megjegyzes;

        return $this;
    }

    /**
     * Get megjegyzes
     *
     * @return string
     */
    public function getMegjegyzes()
    {
        return $this->megjegyzes;
    }

    /**
     * @ORM\prePersist
     */
    public function setLetrehozva()
    {
        $this->letrehozva = time();
    }

    /**
     * Get letrehozva
     *
     * @return string
     */
    public function getLetrehozva()
    {
        return $this->letrehozva;
    }

    /**
     * Set letrehozo
     *
     * @param string $letrehozo
     *
     * @return Telephely
     */
    public function setLetrehozo($letrehozo)
    {
        $this->letrehozo = $letrehozo;

        return $this;
    }

    /**
     * Get letrehozo
     *
     * @return string
     */
    public function getLetrehozo()
    {
        return $this->letrehozo;
    }

    /**
     * @ORM\preUpdate
     * @ORM\prePersist
     */
    public function setModositva()
    {
        $this->modositva = time();
    }

    /**
     * Get modositva
     *
     * @return string
     */
    public function getModositva()
    {
        return $this->modositva;
    }

    /**
     * Set modosito
     *
     * @param string $modosito
     *
     * @return Telephely
     */
    public function setModosito($modosito)
    {
        $this->modosito = $modosito;

        return $this;
    }

    /**
     * Get modosito
     *
     * @return string
     */
    public function getModosito()
    {
        return $this->modosito;
    }

    /**
     * Set orszag
     *
     * @param \FeladatBundle\Entity\Countries $orszag
     *
     * @return Telephely
     */
    public function setOrszag(\FeladatBundle\Entity\Countries $orszag = null)
    {
        $this->orszag = $orszag;

        return $this;
    }

    /**
     * Get orszag
     *
     * @return \FeladatBundle\Entity\Countries
     */
    public function getOrszag()
    {
        return $this->orszag;
    }
}
