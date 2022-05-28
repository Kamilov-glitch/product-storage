<?php 

namespace App\Models;

use App\Models\Product;

class Furniture extends Product
{
    public function __construct($sku, $name, $price, $attr)
    {
        parent::__construct($sku, $name, $price, "furniture", $attr);
    }
}