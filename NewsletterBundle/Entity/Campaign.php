<?php

namespace Jet\NewsletterBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Jet\NewsletterBundle\Entity\Campaign
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Jet\NewsletterBundle\Entity\CampaignRepository")
 */
class Campaign
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
     * @ORM\ManyToOne(targetEntity="Plantilla")
     * @ORM\JoinColumn(name="plantilla_id", referencedColumnName="id")
     */
     private $template;

    /**
     * @var text $head
     *
     * @ORM\Column(name="head", type="text")
     */
    private $head;

    /**
     * @var text $body
     *
     * @ORM\Column(name="body", type="text")
     */
    private $body;

    /**
     * @var integer $status
     *
     * @ORM\Column(name="status", type="integer")
     */
    private $status;

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
     * @var datetime $starts_at
     *
     * @ORM\Column(name="starts_at", type="datetime")
     */
    private $starts_at;
    
    
    /**
     * @ORM\ManyToOne(targetEntity="Jet\MallifyBundle\Entity\User", inversedBy="lechuza_campaigns")
     * @ORM\JoinColumn(name="owner_id", referencedColumnName="id")
     */
    private $owner;


    

    /**
     * @ORM\ManyToMany(targetEntity="Suscriber")
     * @ORM\JoinTable(name="campaign_suscribers",
     *      joinColumns={@ORM\JoinColumn(name="campaign_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="suscriber_id", referencedColumnName="id", unique=true)}
     *      )
     */
    private $suscribers;
    
   
    

    /**
     * @ORM\ManyToMany(targetEntity="Grupo")
     * @ORM\JoinTable(name="campaign_grupos",
     *      joinColumns={@ORM\JoinColumn(name="campaign_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="grupo_id", referencedColumnName="id", unique=true)}
     *      )
     */
    private $grupos; 
    
    
    

    /**
     * @ORM\ManyToMany(targetEntity="Suscriber")
     * @ORM\JoinTable(name="campaign_pending",
     *      joinColumns={@ORM\JoinColumn(name="campaign_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="suscriber_id", referencedColumnName="id", unique=true)}
     *      )
     */
    private $pending;


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
     * Set template
     *
     * @param string $template
     */
    public function setTemplate($template)
    {
        $this->template = $template;
    }

    /**
     * Get template
     *
     * @return string 
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * Set head
     *
     * @param text $head
     */
    public function setHead($head)
    {
        $this->head = $head;
    }

    /**
     * Get head
     *
     * @return text 
     */
    public function getHead()
    {
        return $this->head;
    }

    /**
     * Set body
     *
     * @param text $body
     */
    public function setBody($body)
    {
        $this->body = $body;
    }

    /**
     * Get body
     *
     * @return text 
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set status
     *
     * @param integer $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
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
     * Set starts_at
     *
     * @param datetime $startsAt
     */
    public function setStartsAt($startsAt)
    {
        $this->starts_at = $startsAt;
    }

    /**
     * Get starts_at
     *
     * @return datetime 
     */
    public function getStartsAt()
    {
        return $this->starts_at;
    }
    public function __construct()
    {
        $this->suscribers = new \Doctrine\Common\Collections\ArrayCollection();
    $this->grupos = new \Doctrine\Common\Collections\ArrayCollection();
    $this->pending = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Get pending
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getPending()
    {
        return $this->pending;
    }
    
    public function addPending(\Jet\NewsletterBundle\Entity\Suscriber $pending){
    	$this->pending[] = $pending;
    }
    
    public function getTextStatus(){
		switch($this->status){
			case 1:
				$return = "Borrador";
				break;
			case 2:
				$return = "Preparada";
				break;
			case 3:
				$return = "Activa";
				break;
			case 4:
				$return = "Finalizada";
				break;
		}
	    return $return;
    }
    
}