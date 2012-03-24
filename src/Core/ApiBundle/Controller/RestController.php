<?php

namespace Core\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;

use Core\ApiBundle\Form\LoginType;

/**
 * @Route("/api")
 */
class RestController extends Controller
{
    /**
     * @Route("/",name="core_api")
     */
    public function indexAction()
    {
    
    		
		$response = "welcome!";
    	
    	
    	return new Response(json_encode($response));
    	
    	
    	
    }
}
