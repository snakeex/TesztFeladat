<?php

namespace FeladatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Partner
 *
 * @ORM\Table(name="partner", indexes={@ORM\Index(name="szekhely_cim_orszag", columns={"szekhely_cim_orszag", "szamlazasi_cim_orszag", "postazasi_cim_orszag"}), @ORM\Index(name="tipus", columns={"tipus"}), @ORM\Index(name="nev_elotag", columns={"nev_elotag"}), @ORM\Index(name="szamlazasi_cim_orszag", columns={"szamlazasi_cim_orszag"}), @ORM\Index(name="postazasi_cim_orszag", columns={"postazasi_cim_orszag"}), @ORM\Index(name="IDX_312B3E16DC86DDFC", columns={"szekhely_cim_orszag"})})
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks()
 */
class Partner {

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
     * @ORM\Column(name="cegnev", type="string", length=255, nullable=false)
     */
    private $cegnev;

    /**
     * @var string
     *
     * @ORM\Column(name="vezeteknev", type="string", length=255, nullable=false)
     */
    private $vezeteknev;

    /**
     * @var string
     *
     * @ORM\Column(name="keresztnev", type="string", length=255, nullable=false)
     */
    private $keresztnev;

    /**
     * @var string
     *
     * @ORM\Column(name="szamlazasi_nev", type="string", length=255, nullable=false)
     */
    private $szamlazasiNev;

    /**
     * @var \FeladatBundle\Entity\Partnertipus
     *
     * @ORM\ManyToOne(targetEntity="FeladatBundle\Entity\Partnertipus", inversedBy="partnertipusok")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="partnertipus", referencedColumnName="id")
     * })
     */
    private $partnertipus;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var integer
     *
     * @ORM\Column(name="szekhely_cim_irsz", type="integer", nullable=false)
     */
    private $szekhelyCimIrsz;

    /**
     * @var string
     *
     * @ORM\Column(name="szekhely_cim_telepules", type="string", length=255, nullable=false)
     */
    private $szekhelyCimTelepules;

    /**
     * @var string
     *
     * @ORM\Column(name="szekhely_cim_kozter", type="string", length=255, nullable=false)
     */
    private $szekhelyCimKozter;

    /**
     * @var integer
     *
     * @ORM\Column(name="szekhely_cim_ihazsz", type="integer", nullable=false)
     */
    private $szekhelyCimIhazsz;

    /**
     * @var integer
     *
     * @ORM\Column(name="szamlazasi_cim_irsz", type="integer", nullable=false)
     */
    private $szamlazasiCimIrsz;

    /**
     * @var string
     *
     * @ORM\Column(name="szamlazasi_cim_telepules", type="string", length=255, nullable=false)
     */
    private $szamlazasiCimTelepules;

    /**
     * @var string
     *
     * @ORM\Column(name="szamlazasi_cim_kozter", type="string", length=255, nullable=false)
     */
    private $szamlazasiCimKozter;

    /**
     * @var integer
     *
     * @ORM\Column(name="szamlazasi_cim_hazsz", type="integer", nullable=false)
     */
    private $szamlazasiCimHazsz;

    /**
     * @var integer
     *
     * @ORM\Column(name="postazasi_cim_irsz", type="integer", nullable=false)
     */
    private $postazasiCimIrsz;

    /**
     * @var string
     *
     * @ORM\Column(name="postazasi_cim_telepules", type="string", length=255, nullable=false)
     */
    private $postazasiCimTelepules;

    /**
     * @var string
     *
     * @ORM\Column(name="postazasi_cim_kozter", type="string", length=255, nullable=false)
     */
    private $postazasiCimKozter;

    /**
     * @var integer
     *
     * @ORM\Column(name="postazasi_cim_hazsz", type="integer", nullable=false)
     */
    private $postazasiCimHazsz;

    /**
     * @var string
     *
     * @ORM\Column(name="adoszam", type="string", nullable=false)
     */
    private $adoszam;

    /**
     * @var string
     *
     * @ORM\Column(name="eu_adoszam", type="string", nullable=false)
     */
    private $euAdoszam;

    /**
     * @var string
     *
     * @ORM\Column(name="cegbejegyzesi_szam", type="string", nullable=false)
     */
    private $cegbejegyzesiSzam;

    /**
     * @var string
     *
     * @ORM\Column(name="telefon", type="string", nullable=false)
     */
    private $telefon;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", nullable=false)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="mobil", type="string", nullable=false)
     */
    private $mobil;

    /**
     * @var string
     *
     * @ORM\Column(name="szuletesnap", type="string", length=25, nullable=false)
     */
    private $szuletesnap;

    /**
     * @var string
     *
     * @ORM\Column(name="anyja_neve", type="string", length=255, nullable=false)
     */
    private $anyjaNeve;

    /**
     * @var string
     *
     * @ORM\Column(name="szig_szam", type="string", length=8, nullable=false)
     */
    private $szigSzam;

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
     * @var \FeladatBundle\Entity\Cegtipus
     *
     * @ORM\ManyToOne(targetEntity="FeladatBundle\Entity\Cegtipus", inversedBy="tipusok")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipus", referencedColumnName="id")
     * })
     */
    private $tipus;

    /**
     * @var \FeladatBundle\Entity\Countries
     *
     * @ORM\ManyToOne(targetEntity="FeladatBundle\Entity\Countries", inversedBy="countries")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="szekhely_cim_orszag", referencedColumnName="id")
     * })
     */
    private $szekhelyCimOrszag;

    /**
     * @var \FeladatBundle\Entity\Countries
     *
     * @ORM\ManyToOne(targetEntity="FeladatBundle\Entity\Countries", inversedBy="countries")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="szamlazasi_cim_orszag", referencedColumnName="id")
     * })
     */
    private $szamlazasiCimOrszag;

    /**
     * @var \FeladatBundle\Entity\Countries
     *
     * @ORM\ManyToOne(targetEntity="FeladatBundle\Entity\Countries", inversedBy="countries")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="postazasi_cim_orszag", referencedColumnName="id")
     * })
     */
    private $postazasiCimOrszag;

    /**
     * @var \FeladatBundle\Entity\NevElotag
     *
     * @ORM\ManyToOne(targetEntity="FeladatBundle\Entity\NevElotag", inversedBy="partnerek")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="nev_elotag", referencedColumnName="id")
     * })
     */
    private $nevElotag;

    /**
     * @ORM\OneToMany(targetEntity="Telephely", mappedBy="partner")
     */
    protected $telephelyek;
    
    /**
     *@ORM\OneToMany(targetEntity="Kapcsolattarto", mappedBy="partner")
     */
    protected $kapcsolattartok;

    public function __construct() {
        $this->telephelyek = new ArrayCollection();
        $this->kapcsolattartok = new ArrayCollection();
    }

    public function __toString() {
        if ($this->getCegnev() == "") {
            return "{$this->getVezeteknev()} {$this->getKeresztnev()}";
        }else{
            return "{$this->getCegnev()}";
        }
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
     * Set cegnev
     *
     * @param string $cegnev
     *
     * @return Partner
     */
    public function setCegnev($cegnev) {
        $this->cegnev = $cegnev;

        return $this;
    }

    /**
     * Get cegnev
     *
     * @return string
     */
    public function getCegnev() {
        return $this->cegnev;
    }

    /**
     * Set vezeteknev
     *
     * @param string $vezeteknev
     *
     * @return Partner
     */
    public function setVezeteknev($vezeteknev) {
        $this->vezeteknev = $vezeteknev;

        return $this;
    }

    /**
     * Get vezeteknev
     *
     * @return string
     */
    public function getVezeteknev() {
        return $this->vezeteknev;
    }

    /**
     * Set keresztnev
     *
     * @param string $keresztnev
     *
     * @return Partner
     */
    public function setKeresztnev($keresztnev) {
        $this->keresztnev = $keresztnev;

        return $this;
    }

    /**
     * Get keresztnev
     *
     * @return string
     */
    public function getKeresztnev() {
        return $this->keresztnev;
    }

    /**
     * Set szamlazasiNev
     *
     * @param string $szamlazasiNev
     *
     * @return Partner
     */
    public function setSzamlazasiNev($szamlazasiNev) {
        $this->szamlazasiNev = $szamlazasiNev;

        return $this;
    }

    /**
     * Get szamlazasiNev
     *
     * @return string
     */
    public function getSzamlazasiNev() {
        return $this->szamlazasiNev;
    }

    /**
     * Set partnertipus
     *
     * @param \FeladatBundle\Entity\Partnertipus $partnertipus
     *
     * @return Partner
     */
    public function setPartnertipus(\FeladatBundle\Entity\Partnertipus $partnertipus = null) {
        $this->partnertipus = $partnertipus;

        return $this;
    }

    /**
     * Get partnertipus
     *
     * @return \FeladatBundle\Entity\Partnertipus
     */
    public function getPartnertipus() {
        return $this->partnertipus;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Partner
     */
    public function setEmail($email) {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * Set szekhelyCimIrsz
     *
     * @param integer $szekhelyCimIrsz
     *
     * @return Partner
     */
    public function setSzekhelyCimIrsz($szekhelyCimIrsz) {
        $this->szekhelyCimIrsz = $szekhelyCimIrsz;

        return $this;
    }

    /**
     * Get szekhelyCimIrsz
     *
     * @return integer
     */
    public function getSzekhelyCimIrsz() {
        return $this->szekhelyCimIrsz;
    }

    /**
     * Set szekhelyCimTelepules
     *
     * @param string $szekhelyCimTelepules
     *
     * @return Partner
     */
    public function setSzekhelyCimTelepules($szekhelyCimTelepules) {
        $this->szekhelyCimTelepules = $szekhelyCimTelepules;

        return $this;
    }

    /**
     * Get szekhelyCimTelepules
     *
     * @return string
     */
    public function getSzekhelyCimTelepules() {
        return $this->szekhelyCimTelepules;
    }

    /**
     * Set szekhelyCimKozter
     *
     * @param string $szekhelyCimKozter
     *
     * @return Partner
     */
    public function setSzekhelyCimKozter($szekhelyCimKozter) {
        $this->szekhelyCimKozter = $szekhelyCimKozter;

        return $this;
    }

    /**
     * Get szekhelyCimKozter
     *
     * @return string
     */
    public function getSzekhelyCimKozter() {
        return $this->szekhelyCimKozter;
    }

    /**
     * Set szekhelyCimIhazsz
     *
     * @param integer $szekhelyCimIhazsz
     *
     * @return Partner
     */
    public function setSzekhelyCimIhazsz($szekhelyCimIhazsz) {
        $this->szekhelyCimIhazsz = $szekhelyCimIhazsz;

        return $this;
    }

    /**
     * Get szekhelyCimIhazsz
     *
     * @return integer
     */
    public function getSzekhelyCimIhazsz() {
        return $this->szekhelyCimIhazsz;
    }

    /**
     * Set szamlazasiCimIrsz
     *
     * @param integer $szamlazasiCimIrsz
     *
     * @return Partner
     */
    public function setSzamlazasiCimIrsz($szamlazasiCimIrsz) {
        $this->szamlazasiCimIrsz = $szamlazasiCimIrsz;

        return $this;
    }

    /**
     * Get szamlazasiCimIrsz
     *
     * @return integer
     */
    public function getSzamlazasiCimIrsz() {
        return $this->szamlazasiCimIrsz;
    }

    /**
     * Set szamlazasiCimTelepules
     *
     * @param string $szamlazasiCimTelepules
     *
     * @return Partner
     */
    public function setSzamlazasiCimTelepules($szamlazasiCimTelepules) {
        $this->szamlazasiCimTelepules = $szamlazasiCimTelepules;

        return $this;
    }

    /**
     * Get szamlazasiCimTelepules
     *
     * @return string
     */
    public function getSzamlazasiCimTelepules() {
        return $this->szamlazasiCimTelepules;
    }

    /**
     * Set szamlazasiCimKozter
     *
     * @param string $szamlazasiCimKozter
     *
     * @return Partner
     */
    public function setSzamlazasiCimKozter($szamlazasiCimKozter) {
        $this->szamlazasiCimKozter = $szamlazasiCimKozter;

        return $this;
    }

    /**
     * Get szamlazasiCimKozter
     *
     * @return string
     */
    public function getSzamlazasiCimKozter() {
        return $this->szamlazasiCimKozter;
    }

    /**
     * Set szamlazasiCimHazsz
     *
     * @param integer $szamlazasiCimHazsz
     *
     * @return Partner
     */
    public function setSzamlazasiCimHazsz($szamlazasiCimHazsz) {
        $this->szamlazasiCimHazsz = $szamlazasiCimHazsz;

        return $this;
    }

    /**
     * Get szamlazasiCimHazsz
     *
     * @return integer
     */
    public function getSzamlazasiCimHazsz() {
        return $this->szamlazasiCimHazsz;
    }

    /**
     * Set postazasiCimIrsz
     *
     * @param integer $postazasiCimIrsz
     *
     * @return Partner
     */
    public function setPostazasiCimIrsz($postazasiCimIrsz) {
        $this->postazasiCimIrsz = $postazasiCimIrsz;

        return $this;
    }

    /**
     * Get postazasiCimIrsz
     *
     * @return integer
     */
    public function getPostazasiCimIrsz() {
        return $this->postazasiCimIrsz;
    }

    /**
     * Set postazasiCimTelepules
     *
     * @param string $postazasiCimTelepules
     *
     * @return Partner
     */
    public function setPostazasiCimTelepules($postazasiCimTelepules) {
        $this->postazasiCimTelepules = $postazasiCimTelepules;

        return $this;
    }

    /**
     * Get postazasiCimTelepules
     *
     * @return string
     */
    public function getPostazasiCimTelepules() {
        return $this->postazasiCimTelepules;
    }

    /**
     * Set postazasiCimKozter
     *
     * @param string $postazasiCimKozter
     *
     * @return Partner
     */
    public function setPostazasiCimKozter($postazasiCimKozter) {
        $this->postazasiCimKozter = $postazasiCimKozter;

        return $this;
    }

    /**
     * Get postazasiCimKozter
     *
     * @return string
     */
    public function getPostazasiCimKozter() {
        return $this->postazasiCimKozter;
    }

    /**
     * Set postazasiCimHazsz
     *
     * @param integer $postazasiCimHazsz
     *
     * @return Partner
     */
    public function setPostazasiCimHazsz($postazasiCimHazsz) {
        $this->postazasiCimHazsz = $postazasiCimHazsz;

        return $this;
    }

    /**
     * Get postazasiCimHazsz
     *
     * @return integer
     */
    public function getPostazasiCimHazsz() {
        return $this->postazasiCimHazsz;
    }

    /**
     * Set adoszam
     *
     * @param integer $adoszam
     *
     * @return Partner
     */
    public function setAdoszam($adoszam) {
        $this->adoszam = $adoszam;

        return $this;
    }

    /**
     * Get adoszam
     *
     * @return integer
     */
    public function getAdoszam() {
        return $this->adoszam;
    }

    /**
     * Set euAdoszam
     *
     * @param integer $euAdoszam
     *
     * @return Partner
     */
    public function setEuAdoszam($euAdoszam) {
        $this->euAdoszam = $euAdoszam;

        return $this;
    }

    /**
     * Get euAdoszam
     *
     * @return integer
     */
    public function getEuAdoszam() {
        return $this->euAdoszam;
    }

    /**
     * Set cegbejegyzesiSzam
     *
     * @param integer $cegbejegyzesiSzam
     *
     * @return Partner
     */
    public function setCegbejegyzesiSzam($cegbejegyzesiSzam) {
        $this->cegbejegyzesiSzam = $cegbejegyzesiSzam;

        return $this;
    }

    /**
     * Get cegbejegyzesiSzam
     *
     * @return integer
     */
    public function getCegbejegyzesiSzam() {
        return $this->cegbejegyzesiSzam;
    }

    /**
     * Set telefon
     *
     * @param string $telefon
     *
     * @return Partner
     */
    public function setTelefon($telefon) {
        $this->telefon = $telefon;

        return $this;
    }

    /**
     * Get telefon
     *
     * @return string
     */
    public function getTelefon() {
        return $this->telefon;
    }

    /**
     * Set fax
     *
     * @param string $fax
     *
     * @return Partner
     */
    public function setFax($fax) {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string
     */
    public function getFax() {
        return $this->fax;
    }

    /**
     * Set mobil
     *
     * @param string $mobil
     *
     * @return Partner
     */
    public function setMobil($mobil) {
        $this->mobil = $mobil;

        return $this;
    }

    /**
     * Get mobil
     *
     * @return string
     */
    public function getMobil() {
        return $this->mobil;
    }

    /**
     * Set szuletesnap
     *
     * @param string $szuletesnap
     *
     * @return Partner
     */
    public function setSzuletesnap($szuletesnap) {
        $this->szuletesnap = $szuletesnap;

        return $this;
    }

    /**
     * Get szuletesnap
     *
     * @return string
     */
    public function getSzuletesnap() {
        return $this->szuletesnap;
    }

    /**
     * Set anyjaNeve
     *
     * @param string $anyjaNeve
     *
     * @return Partner
     */
    public function setAnyjaNeve($anyjaNeve) {
        $this->anyjaNeve = $anyjaNeve;

        return $this;
    }

    /**
     * Get anyjaNeve
     *
     * @return string
     */
    public function getAnyjaNeve() {
        return $this->anyjaNeve;
    }

    /**
     * Set szigSzam
     *
     * @param string $szigSzam
     *
     * @return Partner
     */
    public function setSzigSzam($szigSzam) {
        $this->szigSzam = $szigSzam;

        return $this;
    }

    /**
     * Get szigSzam
     *
     * @return string
     */
    public function getSzigSzam() {
        return $this->szigSzam;
    }

    /**
     * @ORM\prePersist
     *
     */
    public function setLetrehozva() {
        $this->letrehozva = time();
    }

    /**
     * Get letrehozva
     *
     * @return string
     */
    public function getLetrehozva() {
        return $this->letrehozva;
    }

    /**
     * Set letrehozo
     *
     * @param string $letrehozo
     *
     * @return Partner
     */
    public function setLetrehozo($letrehozo) {
        $this->letrehozo = $letrehozo;

        return $this;
    }

    /**
     * Get letrehozo
     *
     * @return string
     */
    public function getLetrehozo() {
        return $this->letrehozo;
    }

    /**
     * @ORM\preUpdate
     * @ORM\prePersist
     */
    public function setModositva() {
        $this->modositva = time();

        return $this;
    }

    /**
     * Get modositva
     *
     * @return string
     */
    public function getModositva() {
        return $this->modositva;
    }

    /**
     * Set modosito
     *
     * @param string $modosito
     *
     * @return Partner
     */
    public function setModosito($modosito) {
        $this->modosito = $modosito;

        return $this;
    }

    /**
     * Get modosito
     *
     * @return string
     */
    public function getModosito() {
        return $this->modosito;
    }

    /**
     * Set tipus
     *
     * @param \FeladatBundle\Entity\Cegtipus $tipus
     *
     * @return Partner
     */
    public function setTipus(\FeladatBundle\Entity\Cegtipus $tipus = null) {
        $this->tipus = $tipus;

        return $this;
    }

    /**
     * Get tipus
     *
     * @return \FeladatBundle\Entity\Cegtipus
     */
    public function getTipus() {
        return $this->tipus;
    }

    /**
     * Set szekhelyCimOrszag
     *
     * @param \FeladatBundle\Entity\Countries $szekhelyCimOrszag
     *
     * @return Partner
     */
    public function setSzekhelyCimOrszag(\FeladatBundle\Entity\Countries $szekhelyCimOrszag = null) {
        $this->szekhelyCimOrszag = $szekhelyCimOrszag;

        return $this;
    }

    /**
     * Get szekhelyCimOrszag
     *
     * @return \FeladatBundle\Entity\Countries
     */
    public function getSzekhelyCimOrszag() {
        return $this->szekhelyCimOrszag;
    }

    /**
     * Set szamlazasiCimOrszag
     *
     * @param \FeladatBundle\Entity\Countries $szamlazasiCimOrszag
     *
     * @return Partner
     */
    public function setSzamlazasiCimOrszag(\FeladatBundle\Entity\Countries $szamlazasiCimOrszag = null) {
        $this->szamlazasiCimOrszag = $szamlazasiCimOrszag;

        return $this;
    }

    /**
     * Get szamlazasiCimOrszag
     *
     * @return \FeladatBundle\Entity\Countries
     */
    public function getSzamlazasiCimOrszag() {
        return $this->szamlazasiCimOrszag;
    }

    /**
     * Set postazasiCimOrszag
     *
     * @param \FeladatBundle\Entity\Countries $postazasiCimOrszag
     *
     * @return Partner
     */
    public function setPostazasiCimOrszag(\FeladatBundle\Entity\Countries $postazasiCimOrszag = null) {
        $this->postazasiCimOrszag = $postazasiCimOrszag;

        return $this;
    }

    /**
     * Get postazasiCimOrszag
     *
     * @return \FeladatBundle\Entity\Countries
     */
    public function getPostazasiCimOrszag() {
        return $this->postazasiCimOrszag;
    }

    /**
     * Set nevElotag
     *
     * @param \FeladatBundle\Entity\NevElotag $nevElotag
     *
     * @return Partner
     */
    public function setNevElotag(\FeladatBundle\Entity\NevElotag $nevElotag = null) {
        $this->nevElotag = $nevElotag;

        return $this;
    }

    /**
     * Get nevElotag
     *
     * @return \FeladatBundle\Entity\NevElotag
     */
    public function getNevElotag() {
        return $this->nevElotag;
    }


    /**
     * Add telephelyek
     *
     * @param \FeladatBundle\Entity\Telephely $telephelyek
     *
     * @return Partner
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
     * Add kapcsolattartok
     *
     * @param \FeladatBundle\Entity\Kapcsolattarto $kapcsolattartok
     *
     * @return Partner
     */
    public function addKapcsolattartok(\FeladatBundle\Entity\Kapcsolattarto $kapcsolattartok)
    {
        $this->kapcsolattartok[] = $kapcsolattartok;

        return $this;
    }

    /**
     * Remove kapcsolattartok
     *
     * @param \FeladatBundle\Entity\Kapcsolattarto $kapcsolattartok
     */
    public function removeKapcsolattartok(\FeladatBundle\Entity\Kapcsolattarto $kapcsolattartok)
    {
        $this->kapcsolattartok->removeElement($kapcsolattartok);
    }

    /**
     * Get kapcsolattartok
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getKapcsolattartok()
    {
        return $this->kapcsolattartok;
    }
}
