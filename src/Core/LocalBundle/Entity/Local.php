<?php

namespace Core\LocalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Core\LocalBundle\Entity\Local
 *
 * @ORM\Table(name="core_local_local")
 * @ORM\Entity
 */
class Local
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
     * @var string $localname
     *
     * @ORM\Column(name="localname", type="string", length=255)
     */
    private $localname;

    /**
     * @var string $localname_canonical
     *
     * @ORM\Column(name="localname_canonical", type="string", length=255)
     */
    private $localname_canonical;

    /**
     * @var string $email
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var string $email_canonical
     *
     * @ORM\Column(name="email_canonical", type="string", length=255, nullable=true)
     */
    private $email_canonical;

    /**
     * @var boolean $enabled
     *
     * @ORM\Column(name="enabled", type="boolean")
     */
    private $enabled;

    /**
     * @var text $comment
     *
     * @ORM\Column(name="comment", type="text", nullable=true)
     */
    private $comment;

    /**
     * @var string $telephone
     *
     * @ORM\Column(name="telephone", type="string", length=20, nullable=true)
     */
    private $telephone;

    /**
     * @var float $latitude
     *
     * @ORM\Column(name="latitude", type="float", nullable=true)
     */
    private $latitude;

    /**
     * @var float $longitude
     *
     * @ORM\Column(name="longitude", type="float", nullable=true)
     */
    private $longitude;

    /**
     * @var string $adress
     *
     * @ORM\Column(name="adress", type="string", length=255, nullable=true)
     */
    private $adress;
    
    /**
     * @var string $numero
     *
     * @ORM\Column(name="numero", type="string", length=100, nullable=true)
     */
    private $numero;

    /**
     * @var integer $piso
     *
     * @ORM\Column(name="piso", type="integer", nullable=true)
     */
    private $piso;

    /**
     * @var string $puerta
     *
     * @ORM\Column(name="puerta", type="string", length=5, nullable=true)
     */
    private $puerta;

    /**
     * @var string $poblacion
     *
     * @ORM\Column(name="poblacion", type="string", length=50, nullable=true)
     */
    private $poblacion;

    /**
     * @var string $provincia
     *
     * @ORM\Column(name="provincia", type="string", length=50, nullable=true)
     */
    private $provincia;

    /**
     * @var string $codigo_postal
     *
     * @ORM\Column(name="codigo_postal", type="string", length=5, nullable=true)
     */
    private $codigo_postal;

	/**
     * @var string $web
     *
     * @ORM\Column(name="web", type="string", length=255, nullable=true)
     */
    private $web;

    /**
     * @var string $web_canonical
     *
     * @ORM\Column(name="web_canonical", type="string", length=255, nullable=true)
     */
    private $web_canonical;
    
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
     * Set localname
     *
     * @param string $localname
     */
    public function setLocalname($localname)
    {
        $this->localname = $localname;
    }

    /**
     * Get localname
     *
     * @return string 
     */
    public function getLocalname()
    {
        return $this->localname;
    }

    /**
     * Set localname_canonical
     *
     * @param string $localnameCanonical
     */
    public function setLocalnameCanonical($localnameCanonical)
    {
        $this->localname_canonical = $localnameCanonical;
    }

    /**
     * Get localname_canonical
     *
     * @return string 
     */
    public function getLocalnameCanonical()
    {
        return $this->localname_canonical;
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
     * Set email_canonical
     *
     * @param string $emailCanonical
     */
    public function setEmailCanonical($emailCanonical)
    {
        $this->email_canonical = $emailCanonical;
    }

    /**
     * Get email_canonical
     *
     * @return string 
     */
    public function getEmailCanonical()
    {
        return $this->email_canonical;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
    }

    /**
     * Get enabled
     *
     * @return boolean 
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set comment
     *
     * @param text $comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    /**
     * Get comment
     *
     * @return text 
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }

    /**
     * Get telephone
     *
     * @return string 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set latitude
     *
     * @param float $latitude
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }

    /**
     * Get latitude
     *
     * @return float 
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param float $longitude
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }

    /**
     * Get longitude
     *
     * @return float 
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set adress
     *
     * @param string $adress
     */
    public function setAdress($adress)
    {
        $this->adress = $adress;
    }

    /**
     * Get adress
     *
     * @return string 
     */
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * Set web
     *
     * @param string $web
     */
    public function setWeb($web)
    {
        $this->web = $web;
    }

    /**
     * Get web
     *
     * @return string 
     */
    public function getWeb()
    {
        return $this->web;
    }

    /**
     * Set web_canonical
     *
     * @param string $webCanonical
     */
    public function setWebCanonical($webCanonical)
    {
        $this->web_canonical = $webCanonical;
    }

    /**
     * Get web_canonical
     *
     * @return string 
     */
    public function getWebCanonical()
    {
        return $this->web_canonical;
    }

    /**
     * Set numero
     *
     * @param string $numero
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    /**
     * Get numero
     *
     * @return string 
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set piso
     *
     * @param integer $piso
     */
    public function setPiso($piso)
    {
        $this->piso = $piso;
    }

    /**
     * Get piso
     *
     * @return integer 
     */
    public function getPiso()
    {
        return $this->piso;
    }

    /**
     * Set puerta
     *
     * @param string $puerta
     */
    public function setPuerta($puerta)
    {
        $this->puerta = $puerta;
    }

    /**
     * Get puerta
     *
     * @return string 
     */
    public function getPuerta()
    {
        return $this->puerta;
    }

    /**
     * Set poblacion
     *
     * @param string $poblacion
     */
    public function setPoblacion($poblacion)
    {
        $this->poblacion = $poblacion;
    }

    /**
     * Get poblacion
     *
     * @return string 
     */
    public function getPoblacion()
    {
        return $this->poblacion;
    }

    /**
     * Set provincia
     *
     * @param string $provincia
     */
    public function setProvincia($provincia)
    {
        $this->provincia = $provincia;
    }

    /**
     * Get provincia
     *
     * @return string 
     */
    public function getProvincia()
    {
        return $this->provincia;
    }

    /**
     * Set codigo_postal
     *
     * @param string $codigoPostal
     */
    public function setCodigoPostal($codigoPostal)
    {
        $this->codigo_postal = $codigoPostal;
    }

    /**
     * Get codigo_postal
     *
     * @return string 
     */
    public function getCodigoPostal()
    {
        return $this->codigo_postal;
    }
}