<?php

namespace FeladatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Kapcsolattarto
 *
 * @ORM\Table(name="kapcsolattartok")
 * @ORM\Entity
 * )
 * @ORM\HasLifecycleCallbacks()
 */
class Kapcsolattarto {

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
     * 
     * @ORM\Column(name="nev", type="string", length=255, nullable=false)
     */
    private $nev;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;
    
    /**
     * @var string
     *
     * @ORM\Column(name="telefon", type="string", length=50, nullable=false)
     */
    private $telefon;
    
    /**
     * @var \FeladatBundle\Entity\Partner
     *
     * @ORM\ManyToOne(targetEntity="FeladatBundle\Entity\Partner", inversedBy="kapcsolattartok")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="partner", referencedColumnName="id")
     * })
     */
    private $partner;

    /**
     * @var string
     *
     * @ORM\Column(name="letrehozva", type="string", length=25, nullable=false)
     */
    private $letrehozva;

    /**
     * @var string
     *
     * @ORM\Column(name="letrehozo", type="string", length=255, nullable=true)
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
     * @ORM\Column(name="modosito", type="string", length=255, nullable=true)
     */
    private $modosito;

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
     * Set nev
     *
     * @param string $nev
     *
     * @return Kapcsolattarto
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
     * Set email
     *
     * @param string $email
     *
     * @return Kapcsolattarto
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
     * Set telefon
     *
     * @param string $telefon
     *
     * @return Kapcsolattarto
     */
    public function setTelefon($telefon)
    {
        $this->telefon = $telefon;

        return $this;
    }

    /**
     * Get telefon
     *
     * @return string
     */
    public function getTelefon()
    {
        return $this->telefon;
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
     * @return Kapcsolattarto
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
     * @return Kapcsolattarto
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
     * Set partner
     *
     * @param \FeladatBundle\Entity\Partner $partner
     *
     * @return Kapcsolattarto
     */
    public function setPartner(\FeladatBundle\Entity\Partner $partner = null)
    {
        $this->partner = $partner;

        return $this;
    }

    /**
     * Get partner
     *
     * @return \FeladatBundle\Entity\Partner
     */
    public function getPartner()
    {
        return $this->partner;
    }
}
