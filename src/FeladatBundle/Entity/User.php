<?php

namespace FeladatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * User
 *
 * @ORM\Table(name="user", uniqueConstraints={@ORM\UniqueConstraint(name="felhasznalonev", columns={"felhasznalonev"})}, indexes={@ORM\Index(name="nev_elotag", columns={"nev_elotag"})})
 * @ORM\Entity
 */
class User implements UserInterface
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
     * @ORM\Column(name="felhasznalonev", type="string", length=255, nullable=false)
     */
    private $felhasznalonev;

    /**
     * @var string
     *
     * @ORM\Column(name="jelszo", type="string", length=255, nullable=false)
     */
    private $jelszo;

    /**
     * @var string
     *
     * @ORM\Column(name="salt", type="string", length=255, nullable=false)
     */
    private $salt;

    /**
     * @var \FeladatBundle\Entity\NevElotag
     *
     * @ORM\ManyToOne(targetEntity="FeladatBundle\Entity\NevElotag")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="nev_elotag", referencedColumnName="id")
     * })
     */
    protected $nevElotag;



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
     * Set vezeteknev
     *
     * @param string $vezeteknev
     *
     * @return User
     */
    public function setVezeteknev($vezeteknev)
    {
        $this->vezeteknev = $vezeteknev;

        return $this;
    }

    /**
     * Get vezeteknev
     *
     * @return string
     */
    public function getVezeteknev()
    {
        return $this->vezeteknev;
    }

    /**
     * Set keresztnev
     *
     * @param string $keresztnev
     *
     * @return User
     */
    public function setKeresztnev($keresztnev)
    {
        $this->keresztnev = $keresztnev;

        return $this;
    }

    /**
     * Get keresztnev
     *
     * @return string
     */
    public function getKeresztnev()
    {
        return $this->keresztnev;
    }

    /**
     * Set felhasznalonev
     *
     * @param string $felhasznalonev
     *
     * @return User
     */
    public function setUsername($felhasznalonev)
    {
        $this->felhasznalonev = $felhasznalonev;

        return $this;
    }

    /**
     * Get felhasznalonev
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->felhasznalonev;
    }

    /**
     * Set jelszo
     *
     * @param string $jelszo
     *
     * @return User
     */
    public function setPassword($jelszo)
    {
        $this->jelszo = $jelszo;

        return $this;
    }

    /**
     * Get jelszo
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->jelszo;
    }

    /**
     * Set salt
     *
     * @param string $salt
     *
     * @return User
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Get salt
     *
     * @return string
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * Set nevElotag
     *
     * @param \FeladatBundle\Entity\NevElotag $nevElotag
     *
     * @return User
     */
    public function setNevElotag(\FeladatBundle\Entity\NevElotag $nevElotag = null)
    {
        $this->nevElotag = $nevElotag;

        return $this;
    }

    /**
     * Get nevElotag
     *
     * @return \FeladatBundle\Entity\NevElotag
     */
    public function getNevElotag()
    {
        return $this->nevElotag;
    }
    
    public function getRoles()
    {
        return array('ROLE_USER');
    }
    
    public function eraseCredentials() {
        
    }
}
