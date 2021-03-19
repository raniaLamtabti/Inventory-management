<?php
require_once 'database.php';

class Store
{
    public function create($name, $address, $capacity, $idUser, $image)
    {
        $db = new Database;
        $pdo = $db->connect();
        $req = $pdo->query('INSERT INTO store SET  name="' . $name . '", address="' . $address . '", capacity="' . $capacity . '", idUser="' . $idUser . '", image="' . $image . '"');
        var_dump($req);
    }

    public function read($id)
    {
        $db = new Database;
        $pdo = $db->connect();
        $req = $pdo->query('SELECT * FROM store WHERE idUser="' . $id . '"');
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
    }

    public function show($id)
    {
        $db = new Database;
        $pdo = $db->connect();
        $req = $pdo->query('SELECT * FROM store WHERE id="' . $id . '"');
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
    }

    public function update($name, $address, $capacity, $image, $idS)
    {
        $db = new Database;
        $pdo = $db->connect();
        $req = $pdo->query('UPDATE store SET  name="' . $name . '", address="' . $address . '", capacity="' . $capacity . '", image="' . $image . '" WHERE id="' . $idS . '"');
       
    }

}
