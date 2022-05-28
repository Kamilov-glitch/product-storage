<?php 

namespace App\Models;

use App\Models\Product;

class Book extends Product
{
    public function __construct($sku, $name, $price, $attr)
    {
        parent::__construct($sku, $name, $price, "book", $attr);
    }
}