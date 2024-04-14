<?php
/*
* Main model 
*/
class Model extends Database
{

    public $errors = array() ;
    public function __construct() {
        if(!property_exists($this,'table')){
            $this->table = strtolower($this::class) . "s";
        }
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
        //? remove unwanted columns before insert
        if(property_exists($this,'allowedColumns')){
            foreach($data as $key => $columns){
                if(!in_array($key , $this->allowedColumns)){
                    unset($data[$key]);
                }
            }
        }

         //? run function before insert
         if(property_exists($this,'beforeInsert')){
            foreach($this->beforeInsert as $func){
                $data = $this->$func($data);
            }
        }
        
        $keys = array_keys(($data));
        $columns = implode(",",$keys);
        $values = implode(",:",$keys);
        $query = "INSERT INTO $this->table($columns) VALUES (:$values) ";
        return $this->query($query,$data);
    }

    public function update($id,$data){
        $data['id'] = $id;
        $str = "";
        foreach($data as $key => $value){
            $str .= $key . "=:" . $value;
        }
        $str = trim($str,",");
        $data['id'] = $id;
        
        $query = "UPDATE $this->table SET $str WHERE id =:id";
        return $this->query($query,$data);
    }

    public function delete($id){
        $query = "DELETE FROM $this->table WHERE id =:id";
        $data['id'] = $id;
        return $this->query($query,$data);
    }

    
}