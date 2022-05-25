<?php

use App\Controllers\ProductController;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

$routes = new RouteCollection();
$routes->add('homepage', new Route(constant('URL_SUBFOLDER') . "/", array('controller' => 'ProductController', 
'method' => 'index'), array()));
$routes->add('addproduct', new Route(constant('URL_SUBFOLDER') . "/addproduct", 
array('controller' => 'ProductController', 'method' => 'create'), array()));


// js route
$routes->add('js', new Route(constant('APP_ROOT') . "/views/add.js", array(), array()));