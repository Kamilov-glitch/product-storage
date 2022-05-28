<?php

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

$routes = new RouteCollection();
$routes->add('homepage', new Route(constant('URL_SUBFOLDER') . "", 
array('controller' => 'ProductController', 
'method' => 'index'), array()));
$routes->add('addproduct', new Route(constant('URL_SUBFOLDER') . "addproduct", 
array('controller' => 'ProductController', 'method' => 'create'), array()));

// POST PRODUCT ROUTE
$postRoute = new RouteCollection();
$postRoute->add('postproduct', new Route(constant('URL_SUBFOLDER') . "postproduct", 
array('controller' => 'ProductController', 'method' => 'store')));
$postRoute->setMethods(['POST']);

$routes->addCollection($postRoute);

// DELETE PRODUCTS ROUTE
$deleteRoute = new RouteCollection();
$deleteRoute->add('deleteproduct', new Route(constant('URL_SUBFOLDER') . "deleteproduct",
array('controller' => 'ProductController', 'method' => 'destroy')));
$deleteRoute->setMethods(['POST']);

$routes->addCollection($deleteRoute);