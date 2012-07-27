<?php

namespace CM\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Template()
     * @param type $name
     * @return type 
     */
    public function indexAction($name)
    {
        return  array('name' => $name);
//        return $this->render('CMUserBundle:Default:index.html.twig', array('name' => $name));
    }
}
