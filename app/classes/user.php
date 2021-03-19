<?php
require_once 'database.php';

class User
{
    // public function insert($firstname, $lastname, $username, $email, $photo, $password)
    // {
    //     $db = new Database;
    //     $pdo = $db->connect();
    //     $req = $pdo->exec('INSERT INTO user SET username="' . $username . '", password="' . $password . '", email="' . $email . '", firstname="' . $firstname . '", lastname="' . $lastname . '", photo="' . $photo . '"');
    //     var_dump($req);
    // }

    public function fetch($username, $password)
    {
        $id = 0;

        $db = new Database;
        $pdo = $db->connect();
        $req = $pdo->query('SELECT id FROM user WHERE username="' . $username . '" and password="' . $password . '"');
        $data = $req->fetchColumn();

        if ($data) {
            $id = $data;
        }

        return $id;
    }

    public function create($firstname, $lastname, $username, $email, $password){
        
        $db = new Database;
        $pdo = $db->connect();
        $req = $pdo->query('INSERT INTO user SET firstname="'. $firstname .'", lastname="'. $lastname .'", username="'. $username .'", email="'. $email.'", password="'. $password .'"');

    }

    public function show($id)
    {
        $db = new Database;
        $pdo = $db->connect();
        $req = $pdo->query('SELECT * FROM user WHERE id="' . $id . '"');
        $data = $req->fetch(PDO::FETCH_OBJ);
        return $data;
    }
}
