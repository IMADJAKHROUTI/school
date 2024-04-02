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
        $query = "SELECT * FROM $this->table where :column = :value";
        return $this->query($query,['column'=>$column,'value'=>$value]);
    }
}