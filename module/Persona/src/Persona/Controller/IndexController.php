<?php
namespace Persona\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Zend\View\Model\JsonModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        $p = $this->params()->fromRoute();
        var_dump($this->settings());
        
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
    /**
     * Get data of API github
     * @url http://localhost/iglesia-bb/public/persona/index/github
     * 
     * @return \Zend\View\Model\JsonModel
     */
    public function githubAction()
    {   
        $result = new JsonModel();
        $statusCode = false;
        $client = new Client();
        
        try {
            $res = $client->get('https://api.github.com/user', ['auth' =>  ['enlacee', 'miclave']]);
            $statusCode = $res->getStatusCode();
        } catch (ClientException $e) {
            $statusCode = $e->getResponse()->getStatusCode();
        }
        
        if ($statusCode == 200) {
            //echo $res->getHeader('content-type');
            // 'application/json; charset=utf8'
            /*
            var_dump(get_class_methods($res));            
            var_dump($res->json());            
            var_dump(json_decode($res->getBody()));
            */
            $result =  new JsonModel(array('data' => $res->json()));
        }
        
        return $result;
    }
}
