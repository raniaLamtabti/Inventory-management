<?php 
    require_once '../../../classes/category.php';
    $categoriesVar = new Category;
    $categories = $categoriesVar->read();
?>