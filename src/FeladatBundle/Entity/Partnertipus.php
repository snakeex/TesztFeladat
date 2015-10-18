<?php

namespace FeladatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * Partnertipus
 *
 * @ORM\Table(name="partnertipus")
 * @ORM\Entity
 */
class Partnertipus {
    
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
     * @ORM\Column(name="tipus", type="string", length=25, nullable=false)
     */
    private $tipus;
    
    /**
     *
     * @ORM\OneToMany(targetEntity="Partner", mappedBy="partnertipus")
     */
    protected $partnertipusok;
    
    public function __construct() {
        $this->partnertipusok = new ArrayCollection();
    }
    
    public function __toString() {
        return "{$this->getTipus()}";
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
     * Set tipus
     *
     * @param string $tipus
     *
     * @return Partnertipus
     */
    public function setTipus($tipus)
    {
        $this->tipus = $tipus;

        return $this;
    }

    /**
     * Get tipus
     *
     * @return string
     */
    public function getTipus()
    {
        return $this->tipus;
    }
}
