<?php

namespace Jet\NewsletterBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Jet\NewsletterBundle\Entity\Suscriber
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Jet\NewsletterBundle\Entity\SuscriberRepository")
 */
class Suscriber
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
     * @var string $name
     *
     * @ORM\Column(name="name", type="string",nullable="true", length=255)
     */
    private $name;


    /**
     * @var string $surname
     *
     * @ORM\Column(name="surname", type="string", length=255, nullable="true")
     */
    private $surname;

    /**
     * @var string $email
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

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
     * @var string $phone
     *
     * @ORM\Column(name="phone", type="string", length=255, nullable="true")
     */
    private $phone;

    /**
     * @var string $address
     *
     * @ORM\Column(name="address", type="string", length=255, nullable="true")
     */
    private $address;

    /**
     * @var text $description
     *
     * @ORM\Column(name="description", type="text", nullable="true")
     */
    private $description;
    
    /** @ORM\ManyToMany(targetEntity="Grupo") */
    private $grupos;
    
    /**
     * @ORM\ManyToMany(targetEntity="Campaign", mappedBy="suscribers")
     */
     private $campaigns;
    
    /**
     * @ORM\ManyToMany(targetEntity="Campaign", mappedBy="pending")
     */
     private $pending_campaigns;
    
    /**
     * @ORM\ManyToOne(targetEntity="Jet\MallifyBundle\Entity\User", inversedBy="lechuza_suscribers")
     * @ORM\JoinColumn(name="owner_id", referencedColumnName="id")
     */
    private $owner;


public function __toString(){
	return $this->getName() . " (" . $this->getEmail() . ")";
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
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set email
     *
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
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
     * Set phone
     *
     * @param string $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set address
     *
     * @param string $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set description
     *
     * @param text $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Get description
     *
     * @return text 
     */
    public function getDescription()
    {
        return $this->description;
    }
    public function __construct()
    {
        $this->grupos = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add grupos
     *
     * @param Jet\NewsletterBundle\Entity\Grupo $grupos
     */
    public function addGrupo(\Jet\NewsletterBundle\Entity\Grupo $grupos)
    {
        $this->grupos[] = $grupos;
    }

    /**
     * Get grupos
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getGrupos()
    {
        return $this->grupos;
    }

    /**
     * Set surname
     *
     * @param string $surname
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;
    }

    /**
     * Get surname
     *
     * @return string 
     */
    public function getSurname()
    {
        return $this->surname;
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

    /**
     * Get pending_campaigns
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getPendingCampaigns()
    {
        return $this->pending_campaigns;
    }
}