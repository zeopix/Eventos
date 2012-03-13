<?php
// src/Jet/UserBundle/Entity/User.php

namespace Core\UserBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="jet_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string $secondname
     *
     * @ORM\Column(name="secondname", type="string", length=255, nullable=true)
     */
    private $secondname;

    /**
     * @var string $surname
     *
     * @ORM\Column(name="surname", type="string", length=255, nullable=true)
     */
    private $surname;
    
    /**
     * @var date $birthday
     *
     * @ORM\Column(name="birthday", type="date", nullable=true)
     */
    private $birthday;

    /**
     * @var boolean $isMale
     *
     * @ORM\Column(name="is_male", type="boolean", nullable=true)
     */
    private $isMale;
    

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
     * Set birthday
     *
     * @param date $birthday
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    }

    /**
     * Get birthday
     *
     * @return date 
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Set isMale
     *
     * @param boolean $isMale
     */
    public function setIsMale($isMale)
    {
        $this->isMale = $isMale;
    }

    /**
     * Get isMale
     *
     * @return boolean 
     */
    public function getIsMale()
    {
        return $this->isMale;
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
     * Set secondname
     *
     * @param string $secondname
     */
    public function setSecondname($secondname)
    {
        $this->secondname = $secondname;
    }

    /**
     * Get secondname
     *
     * @return string 
     */
    public function getSecondname()
    {
        return $this->secondname;
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
}