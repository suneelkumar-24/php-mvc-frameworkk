<?php
namespace app\core\database;


class Connection
{
    // private $table = null;
    // private $select = ['*'];
    // private $where = [];
    // private $groupBy = [];
    // private $orderBy = [];
    // private $limit = [];
    // private $offset = [];



    public function __construct()
    {
        // die("cont");
        $servername = "localhost";
        $username = "root";
        $password = "salsoft2020";
        $dbName= 'project2';
        // try {
        //     $conn = new PDO("mysql:host=$servername;dbname=project2", $username, $password);
        //     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //     die('connected');
        //     // return $conn;
        // } catch (PDOException $e) {
        //     die($e->getMessage());
        //     // return "Connection failed: " . $e->getMessage();
        // }

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbName);
        if(!$conn)
        {
            return ('sorry');
        }
        else{
          return $conn;
        }
        // die('not connected');
        // echo $conn;
        // echo "Connected successfully";
    }

    // public function table($tableName)
    // {
    //     $this->table=$tableName;
    //     return $this;
    // }

    // public function select($columns =[],)
    // {
    //     $this->select=$columns;
    //     return $this;
    // }


    // public function get()
    // {
    //     echo $this->table;
    //     echo $this->columns;

    // }
}


// $conn = new Connection();
// $connection->table('users')->select('id','name')->get();


// class DB{
    
//     protected $connection ;
//     public function __construct()
//     {
//         // die("db  class");
//         $conn = new Connection();
//         // $connection = new Connection;
//         die('not work');

//         // die(print_r($connection));

//     }
// }

// $db = new DB();