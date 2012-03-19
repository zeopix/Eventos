<?php

namespace Pro\CrawlerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Pro\CrawlerBundle\Parser\zonaDeluxe;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     * @Template()
     */
    public function indexAction()
    {
        $hola = new zonaDeluxe($this->container);
        $hola->getLatLog("http://www.zonadeluxe.com/discotecas/barcelona/setdenit/");
        return array();
    }
}
