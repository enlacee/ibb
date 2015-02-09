<?php
namespace Persona\Controller;

use Zend\Mvc\Controller\AbstractActionController;

/**
 * Create helpers, snips , variables session and other
 *
 * @author anb
 */
class CustomController extends AbstractActionController
{
    //put your code here
    
    public function __construct()
    {
        echo "  ".__CLASS__;
    }
}
