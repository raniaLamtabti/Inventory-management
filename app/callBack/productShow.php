<?php 
require_once '../../../classes/product.php';
    $productsVar = new Product;
    $product = $productsVar->show($idProduct);
?>