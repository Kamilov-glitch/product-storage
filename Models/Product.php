<?php

class Product {

    public $sku;
    public $name;
    public $price;
    public $type;

    public function __construct($sku, $name, $price, $type) {
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
        $this->type = $type;
    }

}