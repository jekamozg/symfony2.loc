<?php

namespace CM\DesktopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller {

    /**

     */
    public function indexAction() {
        
    }

    /**
     * @Template()
     */
    public function loginAction() {
        $output = array(
            'id' => 1,
        );
        print json_encode($output);
        die;
    }

    /**
     * @Template() 
     */
    public function getProjectsAction() {
        $output = array(
            'id' => 1,
        );
        $projects = array();
        $project1 = array(
            1 => array(
                'id' => 1,
                'name' => 'Project 1',
                'link' => 'http://example.com/1',
                'author' => 1,
            )
        );
        $project2 = array(
            2 => array(
                'id' => 2,
                'name' => 'Project 2',
                'link' => 'http://example.com/2',
                'author' => 2,
            )
        );
        $project3 = array(
            3 => array(
                'id' => 3,
                'name' => 'Project 3',
                'link' => 'http://example.com/3',
                'author' => 3,
            )
        );
        $projects = $project1 + $project2 + $project3;
//        
//        
////        print_r($this->getRequest());die;
//        print_r($_POST);die;
        print json_encode($projects);
        die;
    }

    /**
     * @Template() 
     */
    public function getTasksAction() {
        $data = $_POST;
        $responce = array();
        $taskCount = 3;
        foreach ($data as $key => $value) {
            for ($index = 0; $index < $taskCount; $index++) {
                $responce[$value][$index] = array(
                    'id' => $index,
                    'name' => 'Task ' . $index,
                    'link' => 'http://example.com/' . $index,
                    'author' => $index,
                );
            }
        }
        print json_encode($responce);
        die();
    }

}
