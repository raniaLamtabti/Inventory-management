<?php 
    require_once '../../../classes/product.php';
    $idUser = $_SESSION['id'];
    $productsVar = new Product;
    $products = $productsVar->read($idUser);
?>