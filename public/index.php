<?php
require_once "../vendor/autoload.php";
require_once "../config/config.php";

use App\Controllers\ProductController;
use App\Models\Product;

// var_dump (dirname((__FILE__)));
var_dump(new Product(0, 0, 0, "book", 0));