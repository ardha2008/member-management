<?php

return array(

    'defaultController' => 'Home',

    // Just put null value if you has enable .htaccess file
    'indexFile' => null,

    'module' => array(
        'path' => APP,
        'domainMapping' => array(),
    ),

    'vendor' => array(
        'path' => GEAR.'vendors/'
    ),

    'alias' => array(
        
        'controller' => array(
            'class' => 'Home',
            'method' => 'index'
        ),
        
        'method' => 'alias'
    ),
);
