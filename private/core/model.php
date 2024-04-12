<?php
/*
* Main model 
*/
class Model extends Database
{

    protected $table = "users" ;
    public function __construct() {
        
    }
    public function where($column,$value){
        $column = addslashes($column);
        $query = "SELECT * FROM $this->table where $column = :value";
        return $this->query($query,['value'=>$value]);
    }

    public function findAll(){
        $query = "SELECT * FROM $this->table ";
        return $this->query($query);
    }

    public function insert($data){
        
        $keys = array_keys(($data));
        $columns = implode(",",$keys);
        $values = implode(",:",$keys);
        $query = "INSERT INTO $this->table($columns) VALUES (:$values) ";
        return $this->query($query,$data);
    }
    
}