<?php

namespace CM\ProjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        die('testy');
        return $this->render('CMProjectBundle:Default:index.html.twig', array('name' => $name));
    }
}
