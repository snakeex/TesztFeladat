<?php

namespace FeladatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * NevElotag
 *
 * @ORM\Table(name="nev_elotag")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks()
 */
class NevElotag
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
     * @var string
     *
     * @ORM\Column(name="nev", type="string", length=255, nullable=false)
     */
    private $nev;

    /**
     * @var string
     *
     * @ORM\Column(name="leiras", type="text", length=65535, nullable=true)
     */
    private $leiras;

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
     *
     * @ORM\OneToMany(targetEntity="User", mappedBy="nevElotag")
     * @ORM\OneToMany(targetEntity="Partner", mappedBy="nevElotag")
     */
    protected $elotagok;
    
    public function __construct(){
        $this->elotagok = new ArrayCollection();
    }
    
    public function __toString() {
        return "{$this->getNev()}";
    }

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
     * @return NevElotag
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
     * Set leiras
     *
     * @param string $leiras
     *
     * @return NevElotag
     */
    public function setLeiras($leiras)
    {
        $this->leiras = $leiras;

        return $this;
    }

    /**
     * Get leiras
     *
     * @return string
     */
    public function getLeiras()
    {
        return $this->leiras;
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
     * @return NevElotag
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
     * @return NevElotag
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
}
