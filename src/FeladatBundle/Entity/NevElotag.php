<?php

namespace FeladatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

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
     * @Assert\Length(
     *      min = 2,
     *      max = 5,
     *      minMessage = "túl rövid",
     *      maxMessage = "túl hosszú"
     * )
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
     * @ORM\OneToMany(targetEntity="Partner", mappedBy="nevElotag")
     */
    protected $partnerek;
    
    /**
     * @ORM\OneToMany(targetEntity="User", mappedBy="nevElotag")
     */
    protected $felhasznalok;
    
    public function __construct(){
        $this->partnerek = new ArrayCollection();
        $this->felhasznalok = new ArrayCollection();
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
    
    public function getPartnerek(){
        return $this->partnerek;
    }

    /**
     * Add partnerek
     *
     * @param \FeladatBundle\Entity\User $partnerek
     *
     * @return NevElotag
     */
    public function addPartnerek(\FeladatBundle\Entity\User $partnerek)
    {
        $this->partnerek[] = $partnerek;

        return $this;
    }

    /**
     * Remove partnerek
     *
     * @param \FeladatBundle\Entity\User $partnerek
     */
    public function removePartnerek(\FeladatBundle\Entity\User $partnerek)
    {
        $this->partnerek->removeElement($partnerek);
    }

    /**
     * Add felhasznalok
     *
     * @param \FeladatBundle\Entity\User $felhasznalok
     *
     * @return NevElotag
     */
    public function addFelhasznalok(\FeladatBundle\Entity\User $felhasznalok)
    {
        $this->felhasznalok[] = $felhasznalok;

        return $this;
    }

    /**
     * Remove felhasznalok
     *
     * @param \FeladatBundle\Entity\User $felhasznalok
     */
    public function removeFelhasznalok(\FeladatBundle\Entity\User $felhasznalok)
    {
        $this->felhasznalok->removeElement($felhasznalok);
    }

    /**
     * Get felhasznalok
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFelhasznalok()
    {
        return $this->felhasznalok;
    }
}
