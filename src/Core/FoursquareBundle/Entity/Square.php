<?php

namespace Core\FoursquareBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Core\FoursquareBundle\Entity\Square
 *
 * @ORM\Table(name="core_4square_square")
 * @ORM\Entity
 */
class Square
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var decimal $latNorth
     *
     * @ORM\Column(name="latNorth", type="decimal")
     */
    private $latNorth;

    /**
     * @var decimal $latSouth
     *
     * @ORM\Column(name="latSouth", type="decimal")
     */
    private $latSouth;

    /**
     * @var decimal $logWest
     *
     * @ORM\Column(name="logWest", type="decimal")
     */
    private $logWest;

    /**
     * @var decimal $logEast
     *
     * @ORM\Column(name="logEast", type="decimal")
     */
    private $logEast;

    /**
     * @var datetime $end_at
     *
     * @ORM\Column(name="end_at", type="datetime")
     */
    private $end_at;

    /**
     * @var boolean $complete
     *
     * @ORM\Column(name="complete", type="boolean")
     */
    private $complete;

    /**
     * @ORM\OneToMany(targetEntity="Square", mappedBy="parent")
     */
    private $children;

    /**
     * @ORM\ManyToOne(targetEntity="Square", inversedBy="children")
     * @ORM\JoinColumn(name="parent_id", referencedColumnName="id")
     */
    private $parent;


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
     * Set latNorth
     *
     * @param decimal $latNorth
     */
    public function setLatNorth($latNorth)
    {
        $this->latNorth = $latNorth;
    }

    /**
     * Get latNorth
     *
     * @return decimal 
     */
    public function getLatNorth()
    {
        return $this->latNorth;
    }

    /**
     * Set latSouth
     *
     * @param decimal $latSouth
     */
    public function setLatSouth($latSouth)
    {
        $this->latSouth = $latSouth;
    }

    /**
     * Get latSouth
     *
     * @return decimal 
     */
    public function getLatSouth()
    {
        return $this->latSouth;
    }

    /**
     * Set logWest
     *
     * @param decimal $logWest
     */
    public function setLogWest($logWest)
    {
        $this->logWest = $logWest;
    }

    /**
     * Get logWest
     *
     * @return decimal 
     */
    public function getLogWest()
    {
        return $this->logWest;
    }

    /**
     * Set logEast
     *
     * @param decimal $logEast
     */
    public function setLogEast($logEast)
    {
        $this->logEast = $logEast;
    }

    /**
     * Get logEast
     *
     * @return decimal 
     */
    public function getLogEast()
    {
        return $this->logEast;
    }

    /**
     * Set end_at
     *
     * @param datetime $endAt
     */
    public function setEndAt($endAt)
    {
        $this->end_at = $endAt;
    }

    /**
     * Get end_at
     *
     * @return datetime 
     */
    public function getEndAt()
    {
        return $this->end_at;
    }
    public function __construct()
    {
        $this->children = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add children
     *
     * @param Core\FoursquareBundle\Entity\Square $children
     */
    public function addSquare(\Core\FoursquareBundle\Entity\Square $children)
    {
        $this->children[] = $children;
    }

    /**
     * Get children
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * Set parent
     *
     * @param Core\FoursquareBundle\Entity\Square $parent
     */
    public function setParent(\Core\FoursquareBundle\Entity\Square $parent)
    {
        $this->parent = $parent;
    }

    /**
     * Get parent
     *
     * @return Core\FoursquareBundle\Entity\Square 
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Set complete
     *
     * @param boolean $complete
     */
    public function setComplete($complete)
    {
        $this->complete = $complete;
    }

    /**
     * Get complete
     *
     * @return boolean 
     */
    public function getComplete()
    {
        return $this->complete;
    }
}