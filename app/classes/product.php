<?php
require_once 'database.php';

class Product
{
    public function create($code, $name, $category, $priceBuy, $priceSale, $idUser)
    {
        $db = new Database;
        $pdo = $db->connect();
        $req = $pdo->query('INSERT INTO product SET code="' . $code . '", name="' . $name . '", idCategory="' . $category . '", priceBuy="' . $priceBuy . '", priceSale="' . $priceSale . '", idUser="' . $idUser . '"');
        var_dump($req);
    }

    public function read($id)
    {
        $db = new Database;
        $pdo = $db->connect();
        $req = $pdo->query('SELECT * FROM product WHERE idUser="' . $id . '"');
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
    }

    public function update($id,$code, $name, $category, $priceBuy, $priceSale){
        
        $db = new Database;
        $pdo = $db->connect();
        $req = $pdo->query('UPDATE product SET code="' . $code . '", name="' . $name . '", idCategory="' . $category . '", priceBuy="' . $priceBuy . '", priceSale="' . $priceSale . '" WHERE id="' . $id . '"');
    }

    public function lastLine()
    {
        $db = new Database;
        $pdo = $db->connect();
        $req = $pdo->query('SELECT id FROM product ORDER BY id DESC LIMIT 1');
        $id = $req->fetchColumn();
        return $id;
    }

    public function show($id){
        
        $db = new Database;
        $pdo = $db->connect();
        $req = $pdo->query('SELECT * FROM product WHERE id="' . $id . '"');
        $product = $req->fetch(PDO::FETCH_OBJ);
        return $product;
    }

    public function delete($id)
    {
        echo $id;
        $db = new Database;
        $pdo = $db->connect();
        $req = $pdo->prepare('DELETE FROM product WHERE id="' . $id . '"');
        $req->execute();
    }

}
