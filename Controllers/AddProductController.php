<?php
// var_dump($_POST);
include_once "../Models/Product.php";

$attr = getAttr($_POST['type']);

$product = new Product($_POST['sku'], $_POST['name'], $_POST['price'], $_POST['type'], $attr);
$product->save();

header("Location: ../index.php");

function getAttr($type) {
    $attrs = [
        "dvd" => $_POST['size'] . ' MB',
        "furniture" => $_POST['height'] . "X" . $_POST['width'] . "X" . $_POST['length'],
        "book" => $_POST['weight'] . "KG",
    ];
    return $attrs[$type];
}

?>