<?php 

namespace App\Models;

class DVD extends Product
{
    public function __construct($sku, $name, $price, $attr)
    {
        parent::__construct($sku, $name, $price, "dvd", $attr);
    }
}