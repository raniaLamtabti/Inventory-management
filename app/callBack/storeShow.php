<?php 
require_once '../../../classes/store.php';
    $storesVar = new Store;
    $store = $storesVar->show($idStore);
?>