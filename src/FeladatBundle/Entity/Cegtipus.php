<?php

namespace FeladatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cegtipus
 *
 * @ORM\Table(name="cegtipus")
 * @ORM\Entity
 */
class Cegtipus
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
     * @ORM\Column(name="tipus", type="string", length=255, nullable=false)
     */
    private $tipus;

    /**
     *@ORM\OneToMany(targetEntity="Partner", mappedBy="tipus") 
     */
    protected $tipusok;
    
    public function __construct() {
        $this->tipusok = new ArrayCollection();
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
     * @return Cegtipus
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
