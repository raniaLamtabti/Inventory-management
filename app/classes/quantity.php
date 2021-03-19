<?php
require_once 'database.php';
require_once 'store.php';
class Quantity
{
    public function create($idProduct,$idStore)
    {
        $db = new Database;
        $pdo = $db->connect();
        $req = $pdo->exec('INSERT INTO quantity SET idProduct="' . $idProduct . '", idStore="' . $idStore . '"');
        var_dump($req);
    }

    public function read($idProduct)
    {
        $db = new Database;
        $pdo = $db->connect();
        $req = $pdo->query('SELECT * FROM quantity WHERE idProduct="' . $idProduct . '"');
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
    }

    public function countByProductId($id)
    {
        $db = new Database;
        $pdo = $db->connect();
        $req = $pdo->query('SELECT SUM(quantity) FROM quantity WHERE idProduct="' . $id . '"');
        $total_Qty = $req->fetchColumn();
        echo $total_Qty;
    }
    
    public function update($idProduct, $idStore, $quantity){
        $db = new Database;
        $pdo = $db->connect();
        $req = $pdo->query('UPDATE quantity SET quantity=' . $quantity . ' WHERE idProduct="' . $idProduct . '" and idStore="' . $idStore . '"');
    }
}
