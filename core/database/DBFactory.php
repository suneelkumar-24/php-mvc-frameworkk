<?php

namespace app\core\database;
// use app\core\database\Connection;
// // use app\core\Application;
include_once 'Connection.php';
abstract class DBFactory
{

    protected  $table = null;
    protected $selects = null;
    protected $where = array();
    protected $condition = "";
    private $query = "select ";
    protected $conn = null;
    protected $orderBy = [];
    protected $groupBy = [];
    protected $whereFlag = 0;
    protected $groupFlag = 0;
    protected $orderFlag = 0;


    public function __construct()
    {
    }

    public  function table($tableName)
    {
        $this->table = $tableName;
        return $this;
    }

    public function select($columns)
    {
        $this->select = $columns ?? '*';
        $List = implode(', ', $this->select);
        $this->query .= $List . ' from ' . $this->table;
        // var_dump($this->query );
        // die();
        return $this;
    }

    protected  $whereCondition = "";
    public function where($column, $operator, $operand)
    {
        $this->whereFlag = 1;
        $type  = gettype($operand);
        if ($type == 'integer') {
            $condition  = $column .= $operator .= $operand;
        } elseif ($type == 'string') {
            $condition  = $column .= $operator .= "'$operand'";
        }
        array_push($this->where, $condition);
        $this->whereCondition = implode(' and ', $this->where);
        $this->where = [];
        array_push($this->where, $this->whereCondition);
        return $this;
    }

    public function orWhere($column, $operator, $operand)
    {
        $type  = gettype($operand);
        $condition = "";
        if ($type == 'integer') {
            $condition  = $column .= $operator .= $operand;
        } elseif ($type == 'string') {
            $condition  = $column .= $operator .= "'$operand'";
        }
        array_push($this->where, $condition);
        $this->whereCondition = implode(' or ', $this->where);
        $this->where = [];
        array_push($this->where, $this->whereCondition);
        return $this;
    }

    protected $groupByArray = "";
    public function groupBy($column)
    {
        $this->groupFlag = 1;
        array_push($this->groupBy, $column);
        $this->groupByArray = implode(',', $this->groupBy);
        return $this;
    }

    protected $orderBYarray = "";
    public function orderBy($column, $order = 'ASC')
    {
        $this->orderFlag = 1;
        $condition = $column .= ' ' . $order;
        array_push($this->orderBy, $condition);
        $this->orderBYarray = implode(',', $this->orderBy);
        return $this;
    }

    
    public function limit($limit)
    {
        
    }

    public abstract function get();
    public abstract function first();

    public function generateQuery()
    {
        if ($this->select == null) {
            $this->select('*');
        }
        if ($this->whereFlag == 1) {
            $this->query .= ' where ' . $this->whereCondition;
            $this->whereFlag = 0;
        }
        if ($this->groupFlag == 1) {
            $this->query .= ' group by ' . $this->groupByArray;
            $this->groupFlag = 0;
        }
        if ($this->orderFlag == 1) {
            $this->query .= ' order by ' . $this->orderBYarray;
            $this->orderFlag = 0;
        }
        return $this->query;
    }

}
