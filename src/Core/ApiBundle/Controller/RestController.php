<?php

namespace Core\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;

use Core\ApiBundle\Form\LoginType;

//now is JSONP
class RestController extends Controller
{
    /**
     * @Route("/",name="core_api")
     */
    public function indexAction()
    {	
    	
    	$response = Array(
    		'status' => 200
    	);
    	
    	$plainResponse = (!empty($callback)) ? $callback . "(" . json_encode($response) . ");" : json_encode($response);
    	
    	return new Response($plainResponse);
    	
    	
    }
    /**
     * @Route("/venues",name="core_api_venues")
     */
    public function venuesAction()
    {
    
    	$em = $this->getDoctrine()->getEntityManager();
    	
    	$request = $this->getRequest();
    	
    	$latitude = $request->query->get('latitude');
    	$longitude = $request->query->get('longitude');
    	$callback = $request->query->get('callback');
    	if(!empty($latitude) && !empty($longitude)){
    		//do specified query
    		
    		$rsm = new \Doctrine\ORM\Query\ResultSetMapping;
			$rsm->addEntityResult('ProCrawlerBundle:ZonaDeluxe', 'v');
			$rsm->addFieldResult('v', 'id', 'id');
			$rsm->addFieldResult('v', 'name', 'name');
			$rsm->addFieldResult('v', 'url', 'url');
			$rsm->addFieldResult('v', 'url_images', 'url_images');
			$rsm->addFieldResult('v', 'id_local', 'id_local');
			$rsm->addFieldResult('v', 'lat', 'lat');
			$rsm->addFieldResult('v', 'lng', 'lng');
			$rsm->addFieldResult('v', 'comment', 'comment');
			$rsm->addFieldResult('v', 'curr_distance','distance');

			$query = $em->createNativeQuery('SELECT pro_crawler_zonadeluxe.*, 3956*2*ASIN(SQRT(POWER(SIN((:lat - pro_crawler_zonadeluxe.lat)*pi()/360),2)+COS(:lat * pi()/360)*COS(pro_crawler_zonadeluxe.lat*pi()/180)*POWER(SIN((:lng - pro_crawler_zonadeluxe.lng)*pi()/360),2) )) AS curr_distance FROM pro_crawler_zonadeluxe WHERE 1 ORDER BY curr_distance ASC', $rsm);
			$query->setParameter('lat', $latitude);
			$query->setParameter('lng', $longitude);

			$em_venues = $query->getResult();

    	}else{
    		$em_venues = $em->getRepository('ProCrawlerBundle:ZonaDeluxe')->findAll();
		}
    	$results = Array();
    	foreach($em_venues as $em_venue){
    		$results[] = $em_venue->__toArray();
    	}    	
    	
    	$response = Array(
    		'status' => 200,
    		'params' => null,
    		'results' => $results
    	);
    	
    	$plainResponse = (!empty($callback)) ? $callback . "(" . json_encode($response) . ");" : json_encode($response);
    	
    	return new Response($plainResponse);
    	
    	
    	
    }
}
