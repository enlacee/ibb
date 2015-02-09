<?php

namespace Persona;

 // Add modelo
 use Persona\Model\Persona;
 use Persona\Model\PersonaTable;

use Zend\ModuleManager\Feature\AutoloaderProviderInterface;
use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;
// helper
use Zend\ModuleManager\Feature\ConfigProviderInterface;
use Zend\ModuleManager\Feature\ViewHelperProviderInterface;    

class Module implements 
    AutoloaderProviderInterface,
    ConfigProviderInterface, 
    ViewHelperProviderInterface
{
    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\ClassMapAutoloader' => array(
                __DIR__ . '/autoload_classmap.php',
            ),
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
		    // if we're in a namespace deeper than one level we need to fix the \ in the path
                    __NAMESPACE__ => __DIR__ . '/src/' . str_replace('\\', '/' , __NAMESPACE__),
                ),
            ),
        );
    }

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }
    
    // add helper
    public function getViewHelperConfig()
    {
        return array(
            'factories' => array(
                'hashids' => function($sm) {
                    $helper = new View\Helper\HashidsHelper() ;
                    return $helper;
                }
            )
        );   
   }    
}

