<?php
require_once '../classes/product.php';
$id = $_GET['id'];
$product = new Product;
$product->delete($id);

header("location: ../views/dashboard/product/ProductsList.php");
