<?php

namespace App\Controllers;

use App\Models\Product;
use App\Models\Validate;
use App\Models\Validator;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\HttpFoundation\Request;


class ProductController
{

    public function index(RouteCollection $routes)
    {
        $routeToAddProduct = $routes->get('addproduct')->getPath();
        $routeToDeleteProduct = $routes->get('deleteproduct')->getPath();
        require_once APP_ROOT . '/views/index.php';
    }

    public function create(RouteCollection $routes)
    {
        $routeToIndex = $routes->get('homepage')->getPath();
        $routeToPostProduct = $routes->get('postproduct')->getPath();
        require_once APP_ROOT . '/views/addproduct.php';
    }

    public function store(RouteCollection $routes) 
    {
        $errors = $this->validate($_POST);

        if (!empty($errors)) {
            $routeToIndex = $routes->get('homepage')->getPath();
            $routeToPostProduct = $routes->get('postproduct')->getPath();
            require_once APP_ROOT . '/views/addproduct.php';
            exit;
        }

        $attr = $this->getAttr();

        $product = new Product();
        $product->setSku( htmlspecialchars($_POST['sku']) );
        $product->setName( htmlspecialchars($_POST['name']) );
        $product->setPrice( htmlspecialchars($_POST['price']) );
        $product->setType( htmlspecialchars($_POST['type']) );
        $product->setAttr($attr);

        $product->save();

        $this->headToIndex();
        
    }

    public function destroy(RouteCollection $routes)
    {
        $product = new Product();

        foreach(array_values($_POST) as $sku) {
            
            $product->remove($sku);

        }
        
        $this->headToIndex();

    }

    private function getAttr() 
    {
        if (isset($_POST['size'])) {
            $attr = 'Size: ' . htmlspecialchars($_POST['size']) . ' MB';
        } elseif (isset($_POST['height'])) {
            $attr = 'Dimension: ' . htmlspecialchars($_POST['height']) . "x" . 
            htmlspecialchars($_POST['width']) . "x" . 
            htmlspecialchars($_POST['length']);
        } elseif(isset($_POST['weight'])) {
            $attr = 'Weight: ' . htmlspecialchars($_POST['weight']) ." KG";
        }
        
        return $attr;
    }

    private function validate($post)
    {
        $validator = new Validator();
        return $validator->check($post);
    }

    private function headToIndex()
    {
        $loc = "http://localhost/myProjects/product-storage/";
        header("Location: $loc");
    }
}

?>