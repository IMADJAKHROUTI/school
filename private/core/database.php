<?php
/*
* Database connection
*/
class Database 
{
    private function connect()
    {
        $dbs = "mysql:host=".DB_HOST.";dbname=".DB_NAME;
       
        try{
            $conn = new PDO($dbs,DB_USER,DB_PASS);
            return $conn ;
        }
        catch(PDOException $e){
            die("Erreur de connexion à la base de données : ".$e->getMessage());
        }
    }
    
    public function query($query,$data = array(),$data_type="object"){
        $conn = $this->connect();
        $stm = $conn->prepare($query);
        if($stm !== false){
            $check = $stm->execute($data);
            if($check){
                if($data_type == "object"){
                    $data_F = $stm ->fetchAll(PDO::FETCH_OBJ);
                }
                else{
                    $data_F = $stm ->fetchAll(PDO::FETCH_ASSOC);
                }
                if(is_array($data_F) && count($data_F) > 0){
                    return $data_F;
                }
            } 
        }
        return false;
    }

}