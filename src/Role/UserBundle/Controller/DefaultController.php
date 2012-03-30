<?php

namespace Role\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Core\UserBundle\Request\Client;

class DefaultController extends Controller
{
    /**
     * @Route("/",name="role_user")
	 * @Template()
     */
    public function indexAction()
    {
    	
    	$request= $this->getRequest();
    	$agent = $request->server->get('HTTP_USER_AGENT');
    	
    	$client = new Client($agent);
    	
    	if($client == 'mobile'){
    		return $this->redirect('http://m.eyeonparty.com');
    	}
    	
    	return Array();
    }
}
