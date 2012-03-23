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
     * @Route("/login",name="core_api_login")
     */
    public function loginAction()
    {
    	$request = $this->getRequest();

    	$form = $this->createForm(new LoginType());
    		
		    		
    	if($request->getMethod() == "POST"){
    		//we proceed to login
    		//
    		$username = $request->request->get('username');
    		$response = Array(
    			'status' => 200,
    			'responseText' => "Login status: " . $username
    		);
    	}else{
    		
    		return $this->render('CoreApiBundle:Form:login.json.twig',array('form' => $form->createView()));
    	
    	
    	}
    	
    	
    	
    	return new Response(json_encode($response));
    	
    	
    	
    }
}
