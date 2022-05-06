DB {
    private $table = null;
    private $selects = ['*'];
    private $wheres = [];
    private $groupBy = [];
    private $orderBy = [];
    private $limit = null;
    private $offset = null;
    private $connection = null;
    
    public function table($tableName){
        $this->table = $tableName;
        return $this; 
    }

    public function select(Array $columns = ['*']){
        $this->select[] = $columns;
        return $this; 
    }

    public function where($column,$operator,$operand){
        $this->wheres[] = [$column,$operator,$operand,false];
        return $this; 
    }

    public function orWhere($column,$operator,$operand){
        $this->wheres[] = [$column,$operator,$operand,true];
        return $this; 
    }


    public function get(){

    }

}

DB::table('users')->where('status',1);