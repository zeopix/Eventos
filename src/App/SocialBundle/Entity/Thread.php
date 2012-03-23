<?php

namespace App\SocialBundle\Entity;

use FOS\CommentBundle\Entity\Thread as BaseThread;
use Doctrine\ORM\Mapping as ORM;

/**
 * App\SocialBundle\Entity\Thread
 *
 * @ORM\Entity
 * @ORM\ChangeTrackingPolicy("DEFERRED_EXPLICIT")
 */
class Thread extends BaseThread
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string $subject
     *
     * @ORM\Column(name="subject", type="string", length=255)
     */
    private $subject;

    /**
     * @var text $description
     *
     * @ORM\Column(name="description", type="text")
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
     * @var date $start_day
     *
     * @ORM\Column(name="start_day", type="date")
     */
    private $start_day;

    /**
     * @var time $start_hour
     *
     * @ORM\Column(name="start_hour", type="time")
     */
    private $start_hour;

    /**
     * @var date $end_day
     *
     * @ORM\Column(name="end_day", type="date")
     */
    private $end_day;

    /**
     * @var time $end_hour
     *
     * @ORM\Column(name="end_hour", type="time")
     */
    private $end_hour;


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
     * Set subject
     *
     * @param string $subject
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    /**
     * Get subject
     *
     * @return string 
     */
    public function getSubject()
    {
        return $this->subject;
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
     * Set start_day
     *
     * @param date $startDay
     */
    public function setStartDay($startDay)
    {
        $this->start_day = $startDay;
    }

    /**
     * Get start_day
     *
     * @return date 
     */
    public function getStartDay()
    {
        return $this->start_day;
    }

    /**
     * Set start_hour
     *
     * @param time $startHour
     */
    public function setStartHour($startHour)
    {
        $this->start_hour = $startHour;
    }

    /**
     * Get start_hour
     *
     * @return time 
     */
    public function getStartHour()
    {
        return $this->start_hour;
    }

    /**
     * Set end_day
     *
     * @param date $endDay
     */
    public function setEndDay($endDay)
    {
        $this->end_day = $endDay;
    }

    /**
     * Get end_day
     *
     * @return date 
     */
    public function getEndDay()
    {
        return $this->end_day;
    }

    /**
     * Set end_hour
     *
     * @param time $endHour
     */
    public function setEndHour($endHour)
    {
        $this->end_hour = $endHour;
    }

    /**
     * Get end_hour
     *
     * @return time 
     */
    public function getEndHour()
    {
        return $this->end_hour;
    }
}