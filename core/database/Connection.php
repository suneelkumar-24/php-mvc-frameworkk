<?php

namespace app\core\database;


class Connection
{

    public $servername = "localhost";
    public $username = "root";
    public $password = "salsoft2020";
    public $dbName = 'project2';
    public $conn = null;

    public function __construct()
    {
        $this->conn = mysqli_connect($this->servername, $this->username, $this->password, $this->dbName);
    
    }
}
