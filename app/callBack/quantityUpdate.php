<?php
require_once '../classes/quantity.php';

echo $idProduct = $_POST['idProduct'];
echo $idStore = $_POST['idStore'];
echo $qty = $_POST['quantity'];

$quantity = new Quantity;
$quantity->update($idProduct, $idStore, $qty);


header("location: ../views/dashboard/product/ProductQtyEdit.php");