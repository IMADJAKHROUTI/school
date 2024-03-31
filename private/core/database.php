<?php
/*
* Database connection
*/
class Database 
{
    private function connect()
    {
        $dbs = "mysql:host=localhost;dbname=school";
        $user = "root";
        $password = "";
        try{
            $conn = new PDO($dbs,$user,$password);
            return $conn ;
        }
        catch(PDOException $e){
            die("");
        }
    }
    
    public function query($query,$data = array(),$data_type="object"){
        $conn = $this->connect();
        $stm = $conn->prepare($query);
        if($stm){
            $check = $stm->execute($data);
            if($check){
                if($data_type=="object"){
                    $data_F = $stm ->fetchAll(PDO::FETCH_OBJ);
                }
                else{
                    $data_F = $stm ->fetchAll(PDO::FETCH_ASSOC);
                }
                if(is_array($data_F) && count($data_F)>0){
                    return $data_F;
                }
            }
            
        }

        
        return false;

    }

}