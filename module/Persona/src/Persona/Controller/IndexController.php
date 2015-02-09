<?php

namespace Persona\Controller;

class IndexController extends CustomController
{
    public function indexAction()
    {
        $p = $this->params()->fromRoute();
        //var_dump($p);exit;
        
        $viewHelperManager = $this->getServiceLocator()->get('ViewHelperManager');
        $hashids = $viewHelperManager->get('hashids');     
        $escapedVal = $hashids->encode(12);

        
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
