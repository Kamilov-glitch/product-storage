<?php

use App\Controllers\ProductController;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

$routes = new RouteCollection();
$routes->add('homepage', new Route(constant('URL_SUBFOLDER') . "/", array('controller' => 'ProductController', 
'method' => 'index'), array()));
$routes->add('addproduct', new Route(constant('URL_SUBFOLDER') . "/addproduct", 
array('controller' => 'ProductController', 'method' => 'create'), array()));

// POST PRODUCT ROUTE
$postRoute = new RouteCollection();
$postRoute->add('postproduct', new Route(constant('URL_SUBFOLDER') . 'addproduct', 
array('controller' => 'ProductController', 'method' => 'store')));
$postRoute->setMethods(['POST']);

$routes->addCollection($postRoute);





// js route
$routes->add('js', new Route(constant('APP_ROOT') . "/views/add.js", array(), array()));