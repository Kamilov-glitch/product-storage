<?php
namespace App\Controllers;
use App\Models\Product;

$attr = getAttr($_POST['type']);

$product = new Product($_POST['sku'], $_POST['name'], $_POST['price'], $_POST['type'], $attr);
$product->save();

header("Location: ../index.php");

function getAttr($type) {
    $attrs = [
        "dvd" => $_POST['size'] . ' MB',
        "furniture" => $_POST['height'] . "x" . $_POST['width'] . "x" . $_POST['length'],
        "book" => $_POST['weight'] . "KG",
    ];
    return $attrs[$type];
}

?>