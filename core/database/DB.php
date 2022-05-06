<?php

namespace app\core\database;
// use app\core\database\Connection;
// // use app\core\Application;
include_once 'Connection.php';
class DB extends DBFactory
{
    protected $conn = null;
    public function __construct()
    {
       
        $this->conn = new Connection();
        $this->conn = $this->conn->conn;
        
    }

    public function select(...$columns)
    {
        parent::select($columns);
        return $this;
    }

    public function where($column, $operator, $operand)
    {
        parent::where($column, $operator, $operand);
        return $this;
    }

    public function orWhere($column, $operator, $operand)
    {
        parent::orWhere($column, $operator, $operand);
        return $this;
    }

    public function groupBy($column)
    {
        parent::groupBy($column);
        return $this;
    }

    public function orderBy($column , $order='ASC')
    {
        parent::orderBy($column,$order);
        return $this;
    }

    public  function limit($limit)
    {
        parent::limit($limit);
        return $this;
    }

    public function get()
    {
        $query = parent::generateQuery();
        // var_dump($query);
        $result = mysqli_query($this->conn, $query);
        $array = $result->fetch_all();
  
      
        return $array;
    }
    public function first()
    {
        $query = parent::generateQuery();
        var_dump($query);
        $result = mysqli_query($this->conn, $query);
        var_dump($result);
    }
}