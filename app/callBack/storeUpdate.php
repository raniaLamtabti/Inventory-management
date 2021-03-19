<?php
include '../classes/store.php';
$idS = $_POST['idS'];
$name = $_POST['name'];
$address = $_POST['address'];
$capacity = $_POST['capacity'];
$image = $_POST['image'];

$store = new Store;
$store->update($name, $address, $capacity, $image, $idS);
$store->id;

header("location: ../views/dashboard/store/StoresList.php");