<?php

namespace Role\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Genemu\Bundle\FormBundle\Form\JQuery\Type\GeolocationType;

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
