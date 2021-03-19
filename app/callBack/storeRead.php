<?php 
    require_once '../../../classes/store.php';
    $idUser = $_SESSION['id'];
    $storesVar = new Store;
    $stores = $storesVar->read($idUser);
?>