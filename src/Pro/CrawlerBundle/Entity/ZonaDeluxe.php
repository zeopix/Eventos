<?php

namespace Pro\CrawlerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pro\CrawlerBundle\Entity\ZonaDeluxe
 *
 * @ORM\Table(name="pro_crawler_zonadeluxe")
 * @ORM\Entity
 */
class ZonaDeluxe
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
     * @var string $url
     *
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;

    /**
     * @var string $url
     * @ORM\Column(name="distance", type="string", nullable=true, length=255)
     */
    private $distance;

    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var integer $id_local
     *
     * @ORM\Column(name="id_local", type="integer")
     */
    private $id_local;

    /**
     * @var string $url_images
     *
     * @ORM\Column(name="url_images", type="string", length=255)
     */
    private $url_images;

    /**
     * @var decimal $lat
     *
     * @ORM\Column(name="lat", type="decimal", scale=6)
     */
    private $lat;

    /**
     * @var decimal $lng
     *
     * @ORM\Column(name="lng", type="decimal", scale=6)
     */
    private $lng;

    /**
     * @var string $comment
     *
     * @ORM\Column(name="comment", type="text", nullable=false)
     */
    private $comment;


    /**
     * @var datetime $create_at
     *
     * @ORM\Column(name="create_at", type="datetime")
     */
    private $create_at;


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
     * Set url
     *
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
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
     * Set id_local
     *
     * @param integer $idLocal
     */
    public function setIdLocal($idLocal)
    {
        $this->id_local = $idLocal;
    }

    /**
     * Get id_local
     *
     * @return integer 
     */
    public function getIdLocal()
    {
        return $this->id_local;
    }

    /**
     * Set url_images
     *
     * @param string $urlImages
     */
    public function setUrlImages($urlImages)
    {
        $this->url_images = $urlImages;
    }

    /**
     * Get url_images
     *
     * @return string 
     */
    public function getUrlImages()
    {
        return $this->url_images;
    }

    /**
     * Set lat
     *
     * @param decimal $lat
     */
    public function setLat($lat)
    {
        $this->lat = $lat;
    }

    /**
     * Get lat
     *
     * @return decimal 
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * Set lng
     *
     * @param decimal $lng
     */
    public function setLng($lng)
    {
        $this->lng = $lng;
    }

    /**
     * Get lng
     *
     * @return decimal 
     */
    public function getLng()
    {
        return $this->lng;
    }

    /**
     * Set create_at
     *
     * @param datetime $createAt
     */
    public function setCreateAt($createAt)
    {
        $this->create_at = $createAt;
    }

    /**
     * Get create_at
     *
     * @return datetime 
     */
    public function getCreateAt()
    {
        return $this->create_at;
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
    
    public function setDistance($distance){
    	$this->distance = $distance;
    }
    public function getDistance(){
    	return $this->distance;
    }
    
    public function __toArray(){
    	return Array(
    		'url' => $this->url,
    		'name' => $this->name,
    		'id_local' => $this->id_local,
    		'url_images' => $this->url_images,
    		'lat' => $this->lat,
    		'lng' => $this->lng,
    		'comment' => strip_tags($this->comment),
    	);
    }
}