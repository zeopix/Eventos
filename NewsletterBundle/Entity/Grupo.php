<?php

namespace Jet\NewsletterBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Jet\NewsletterBundle\Entity\Grupo
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Grupo
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
     * @var string $title
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;
    
    /**
     * @ORM\ManyToMany(targetEntity="Suscriber", mappedBy="grupos")
     */
     private $suscribers;
    
    /**
     * @ORM\ManyToMany(targetEntity="Campaign", mappedBy="grupos")
     */
     private $campaigns;

    /**
     * @var string $description
     *
     * @ORM\Column(name="description", type="string", length=255, nullable="true")
     */
    private $description;

    /**
     * @var datetime $created_at
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $created_at;

    /**
     * @var datetime $updated_at
     *
     * @ORM\Column(name="updated_at", type="datetime")
     */
    private $updated_at;

    /**
     * @var integer $members
     *
     * @ORM\Column(name="members", type="integer")
     */
    private $members;
    
    /**
     * @ORM\ManyToOne(targetEntity="Jet\MallifyBundle\Entity\User", inversedBy="lechuza_grupos")
     * @ORM\JoinColumn(name="owner_id", referencedColumnName="id")
     */
    private $owner;


    

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
     * Set title
     *
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set created_at
     *
     * @param datetime $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;
    }

    /**
     * Get created_at
     *
     * @return datetime 
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set updated_at
     *
     * @param datetime $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updated_at = $updatedAt;
    }

    /**
     * Get updated_at
     *
     * @return datetime 
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * Set members
     *
     * @param integer $members
     */
    public function setMembers($members)
    {
        $this->members = $members;
    }

    /**
     * Get members
     *
     * @return integer 
     */
    public function getMembers()
    {
        return $this->members;
    }
    public function __construct()
    {
        $this->suscribers = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add suscribers
     *
     * @param Jet\NewsletterBundle\Entity\Suscriber $suscribers
     */
    public function addSuscriber(\Jet\NewsletterBundle\Entity\Suscriber $suscribers)
    {
        $this->suscribers[] = $suscribers;
    }

    /**
     * Get suscribers
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getSuscribers()
    {
        return $this->suscribers;
    }
    
    public function __toString(){
    	return $this->getTitle();
    }

    /**
     * Set owner
     *
     * @param Jet\MallifyBundle\Entity\User $owner
     */
    public function setOwner(\Jet\MallifyBundle\Entity\User $owner)
    {
        $this->owner = $owner;
    }

    /**
     * Get owner
     *
     * @return Jet\MallifyBundle\Entity\User 
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Add campaigns
     *
     * @param Jet\NewsletterBundle\Entity\Campaign $campaigns
     */
    public function addCampaign(\Jet\NewsletterBundle\Entity\Campaign $campaigns)
    {
        $this->campaigns[] = $campaigns;
    }

    /**
     * Get campaigns
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getCampaigns()
    {
        return $this->campaigns;
    }
    
    public function getCountSuscribers(){
    	return count($this->suscribers);
    }
}