<?php

namespace Persona\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        $p = $this->params()->fromRoute();
        var_dump($p);exit;
        return array();
    }

    public function searchAction()
    {
        $p = $this->params()->fromRoute();
        var_dump($p);exit;

    }

    public function fooAction()
    {


        // This shows the :controller and :action parameters in default route
        // are working when you browse to /module-specific-root/skeleton/foo
        return array();
    }
}
