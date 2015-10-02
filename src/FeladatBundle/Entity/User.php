<?php

namespace FeladatBundle\Entity;

use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user", uniqueConstraints={@ORM\UniqueConstraint(name="felhasznalonev", columns={"felhasznalonev"})})
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
     * @ORM\Column(name="nev_elotag", type="string", length=255, nullable=false)
     */
    private $nevElotag;

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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nevElotag
     *
     * @param string $nevElotag
     *
     * @return User
     */
    public function setNevElotag($nevElotag)
    {
        $this->nevElotag = $nevElotag;

        return $this;
    }

    /**
     * Get nevElotag
     *
     * @return string
     */
    public function getNevElotag()
    {
        return $this->nevElotag;
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
    
    public function getRoles()
    {
        return array('ROLE_USER');
    }
    
    public function eraseCredentials(){
        
    }
}
