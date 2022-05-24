<?php

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

$routes = new RouteCollection();
$routes->add('homepage', new Route(constant('URL_SUBFOLDER') . "/", array('controller' => 'ProductController', 
'method' => 'index'), array()));