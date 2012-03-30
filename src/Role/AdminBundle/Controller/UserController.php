<?php

namespace Role\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
* @Route("/users")
*/
class UserController extends Controller
{
    /**
     * @Route("/",name="role_admin_user")
	 * @Template()
     */
    public function indexAction()
    {
    	$em = $this->getDoctrine()->getEntityManager();
    	
		$entities =    	$em->getRepository('CoreUserBundle:User')->findAll();
    	return Array('entities'=>$entities);
    }
}
