<?php

namespace Jet\NewsletterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use Jet\NewsletterBundle\Entity\Suscriber;
use Jet\NewsletterBundle\Form\SuscriberType;

/**
 * Render controller.
 *
 * @Route("/render")
 */
class RenderController extends Controller
{
    /**
     * Lists all Suscriber entities.
     *
     * @Route("/campaign/{campaignid}", name="render")
     */
    public function indexAction($campaignid)
    {
    $user = $this->get('security.context')->getToken()->getUser();


    	//Enviornment: Web
	    $loader = new \Twig_Loader_String();
		$twig = new \Twig_Environment($loader, array(
		    'cache' => '../web',
		));
		
		$em = $this->getDoctrine()->getEntityManager();
		
		$campaign = $em->getRepository('JetNewsletterBundle:Campaign')->findOneById($campaignid);
		$plantilla = $campaign->getTemplate();
		if($campaign && $plantilla){
		
			$template = $plantilla->getTwig();
		
		
		}
		
		$variables = Array('author' => $user->getUsername(),
				'name' => "{{ name }}",
				'email' => "{{ email }}",
							'body' => $campaign->getBody(),
							'head' => $campaign->getHead()
		);
		
		return new Response($twig->render($template,$variables));
    }
    /**
     * Lists all Suscriber entities.
     *
     * @Route("/template/{templateid}", name="renderTemplate")
     */
    public function templateAction($templateid)
    {
    $user = $this->get('security.context')->getToken()->getUser();


    	//Enviornment: Web
	    $loader = new \Twig_Loader_String();
		$twig = new \Twig_Environment($loader, array(
		    'cache' => '../web',
		));
		
		$em = $this->getDoctrine()->getEntityManager();
		
		$plantilla = $em->getRepository('JetNewsletterBundle:Plantilla')->findOneById($templateid);
		if($plantilla){
		
			$template = $plantilla->getTwig();
		
		
		}
		
		$variables = Array('author' => $user->getUsername(),
				'name' => "{{ name }}",
				'email' => "{{ email }}",
							'body' => '{{ body }}',
							'head' => '{{ head }}'
		);
		
		return new Response($twig->render($template,$variables));
    }

}
