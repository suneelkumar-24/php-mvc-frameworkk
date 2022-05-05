<?php
namespace app\core\database;
// use app\core\database\Connection;
// // use app\core\Application;
include_once 'Connection.php';
class DB{
    
    protected $connection ;
    public function __construct()
    {
        // die("db  class");
        $conn = new Connection();
        // $connection = new Connection;
        die($conn);

        // die(print_r($connection));

    }
}

// $connection = new Connection();
$db = new DB();