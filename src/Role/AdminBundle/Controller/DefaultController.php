<?php

namespace Role\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Google\MapsBundle\Entity\AddressComponent;
use Google\MapsBundle\Geo\Coding;
use Google\MapsBundle\Form\MapType;
use Role\AdminBundle\Form\SampleType;
use Genemu\Bundle\FormBundle\Form\JQuery\Type\GeolocationType;
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
		$form = $this->createForm(new MapType());
		$request = $this->getRequest();
		
		if($request->getMethod() === "post"){
		$form->bindRequest($request);
		
		if($form->isValid()){
			//despues...
		}
		}
    	    	
    	return Array('form'=>$form->createView());
    }
}
