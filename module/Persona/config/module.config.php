<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'Persona\Controller\Index' => 'Persona\Controller\IndexController',
        ),       
    ),
    'controller_plugins' => array(
        'invokables' => array(
            'settings' => 'Persona\Controller\Plugin\Settings',
        )
    ),    
    // http://localhost/iglesia-bb/public/persona/index/123
    // http://localhost/iglesia-bb/public/persona/index/123/enlacee-
    'router' => array(
        'routes' => array(
            'Persona' => array(
                'type'    => 'Literal',
                'options' => array(
                    // Change this to something specific to your module
                    'route'    => '/persona',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Persona\Controller',
                        'controller'    => 'Index',
                        'action'        => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route' => '/:controller[/:action][/:id][/:nick]', // router opcional (op1)
                            //'route' => '/[:controller[/:action][/:id][/:nick]]', // router opcional (op2)
                            //'route'    => '/[:controller[/:action][/:id/:nick]]', // router obligatorio [id/nick]
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'id' => '[0-9][0-9]*',
                                'nick' => '[a-z][a-z_-]*'
                            ),
                            'defaults' => array(
                                'controller' => 'persona',
                                'action' => 'index',
                                'id' => '111',
                                'nick' => 'anibal'
                            ),
                        ),
                    ),
                ),
            ),
            'q' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/q',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Persona\Controller',
                        'controller'    => 'Index',
                        'action'        => 'search',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route' => '[/:keywords]', // router opcional (op1)
                            'constraints' => array(
                                'keywords' => '[a-zA-Z][a-zA-Z0-9_-]*'
                            ),
                        ),
                    ),
                ),
            ),            
            
        ),



    ),
    'view_manager' => array(
        'template_path_stack' => array(
            'Persona' => __DIR__ . '/../view',
        ),
        'strategies' => array(
           'ViewJsonStrategy',
        ),         
    ),
    
    'settings' => array(
        'myApi' => 'htt://api.paypal.com'
    ),
    
    'rest_domain' => 'http://asiste.app',
    'api_ubigeos' => 'http://asiste.app/engines/ubigeos',
    'api_especialities' => 'http://asiste.app/engines/especialities',
    'api_profile_searchs' => 'http://asiste.app/engines/profile_searchs',
    'api_departments' => 'http://asiste.app/engines/departments',
    'api_provinces' => 'http://asiste.app/engines/provinces',
    'api_districts' => 'http://asiste.app/engines/districts',
    'api_searchs' => 'http://asiste.app/engines/searchs',    
);
