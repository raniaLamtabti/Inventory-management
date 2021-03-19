<?php
class Database
{
    private $host;
    private $user;
    private $pwd;
    private $dbName;
    private $pdo;

    public function connect()
    {
        $pdo = new PDO('mysql:dbname=wholesome_wholesale;host=localhost', 'root', '');
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }

}