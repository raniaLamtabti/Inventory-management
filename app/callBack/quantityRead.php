<?php 
    require_once '../../../classes/quantity.php';
    
    $quantitiesVar = new Quantity;
    $quantities = $quantitiesVar->read($idProduct);
?>