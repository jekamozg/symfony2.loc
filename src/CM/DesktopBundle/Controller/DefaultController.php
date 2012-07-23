<?php

namespace CM\DesktopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Template()
     */
    public function indexAction()
    {
        print_r($_POST);
        die('testing');
    }
    
    /**
     * @Template()
     */
    
    public function loginAction() {
        $login = 'jeka';
        $pass = 'jeka+pass_&';
        
        
        $data = array();
        foreach ($_POST as $key => $value) {
            $data[$key] = base64_decode($value);
        }
        
        $output = array();
        
        if($login == $data['login'] && $pass == $data['pass']) {
            $output = array(
                'success' => true,
                'message' => 'You already logged in',
            );
        }
        else {
            $output = array(
                'success' => false,
                'message' => 'Login or pass wrong',
            );
        }
        
        print(json_encode($output));
        die();
    }
}
