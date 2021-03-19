<?php
require_once 'database.php';

class Category
{
    public function read()
    {
        $db = new Database;
        $pdo = $db->connect();
        $req = $pdo->query('SELECT * FROM category');
        $categories = $req->fetchAll(PDO::FETCH_OBJ);
        return $categories;
    }

    public function show($id)
    {
        $db = new Database;
        $pdo = $db->connect();
        $req = $pdo->query('SELECT * FROM category WHERE id="' . $id . '"');
        $name = $req->fetch(PDO::FETCH_OBJ);
        return $name;
    }
}
