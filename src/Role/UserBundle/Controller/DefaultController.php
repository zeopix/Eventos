<?php

namespace Role\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
* @Route("/")
*/
class DefaultController extends Controller
{
    /**
     * @Route("/",name="role_user")
	 * @Template()
     */
    public function indexAction()
    {
    
    	
    	return Array();
    }
}
