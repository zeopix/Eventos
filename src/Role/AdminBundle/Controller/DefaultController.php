<?php

namespace Role\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
* @Route("/admin")
*/
class DefaultController extends Controller
{
    /**
     * @Route("/",name="role_admin")
	 * @Template()
     */
    public function indexAction()
    {
    	return Array();
    }
}
