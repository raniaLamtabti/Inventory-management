<?php
require_once '../classes/product.php';
$id = $_POST['id'];
$code = $_POST['code'];
$name = $_POST['name'];
$category = $_POST['category'];
$priceBuy = $_POST['priceBuy'];
$priceSale = $_POST['priceSale'];

$product = new Product;
$product->update($id,$code, $name, $category, $priceBuy, $priceSale);


header("location: ../views/dashboard/product/ProductsList.php?idP=$id");