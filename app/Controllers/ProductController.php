<?php

namespace App\Controllers;

use App\Models\Product;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\HttpFoundation\Request;


class ProductController
{

    public function index(RouteCollection $routes)
    {
        $routeToAddProduct = $routes->get('addproduct')->getPath();
        require_once APP_ROOT . '/views/index.php';
    }

    public function create(RouteCollection $routes)
    {
        $routeToPostProduct = $routes->get('postproduct')->getPath();
        require_once APP_ROOT . '/views/addproduct.php';
    }

    public function store(RouteCollection $routes) 
    {
        $attr = $this->getAttr($_POST['type']);

        $product = new Product($_POST['sku'], $_POST['name'], $_POST['price'], $_POST['type'], $attr);
        $product->save();

        // header("Location: ../index.php");
        require_once APP_ROOT . '/views/index.php';
    }

    private function getAttr($type) {
        $attrs = [
            "dvd" => $_POST['size'] . ' MB',
            "furniture" => $_POST['height'] . "x" . $_POST['width'] . "x" . $_POST['length'],
            "book" => $_POST['weight'] . "KG",
        ];
        return $attrs[$type];
    }
}

?>