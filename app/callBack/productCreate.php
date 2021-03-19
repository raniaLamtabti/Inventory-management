<?php
include '../classes/product.php';
include '../classes/store.php';
include '../classes/quantity.php';
session_start();
$idUser = $_SESSION['id'];
$code = $_POST['code'];
$name = $_POST['name'];
$category = $_POST['category'];
$priceBuy = $_POST['priceBuy'];
$priceSale = $_POST['priceSale'];

$product = new Product;
$product->create($code, $name, $category, $priceBuy, $priceSale, $idUser);
$product->id;

$lastProduct = new Product;
$idProduct =  $lastProduct->lastLine();

$store = new Store;
$stores = $store->read($idUser);

$quantity = new Quantity;

foreach($stores as $store){
    $idStore = $store->id;
    $quantity->create($idProduct,$idStore);
}
header("location: ../views/dashboard/product/ProductsList.php");