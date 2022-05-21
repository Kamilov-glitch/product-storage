<?php
// var_dump($_POST);
include_once "../Models/Product.php";
$product = new Product($_POST['sku'], $_POST['name'], $_POST['price'], $_POST['type']);
$product->save();

header("Location: ../index.php");

?>