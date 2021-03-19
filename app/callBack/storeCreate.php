<?php
include '../classes/store.php';
session_start();
$idUser = $_SESSION['id'];
$name = $_POST['name'];
$address = $_POST['address'];
$capacity = $_POST['capacity'];
$image = $_POST['image'];

$store = new Store;
$store->create($name, $address, $capacity, $idUser, $image);
$store->id;

header("location: ../views/dashboard/store/StoresList.php");