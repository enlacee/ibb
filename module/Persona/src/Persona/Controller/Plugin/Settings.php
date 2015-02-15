<?php
namespace Persona\Controller\Plugin;

use Zend\Mvc\Controller\Plugin\AbstractPlugin;

class Settings extends AbstractPlugin
{
    protected $settings;

    public function __invoke()
    {
        $config = $this->getController()->getServiceLocator()->get('Config');

        if (isset($config['settings']) && is_array($config['settings'])) {
            $this->settings = $config['settings'];
        }

        return $this->settings;
    }
}