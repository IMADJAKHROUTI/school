<?php
/*
* USER Model 
*/
class User extends Model
{
    protected $beforeInsert = [
        'make_user_id',
        'make_school_id',
        'hash_password'
    ];
    public function validate($POST){
        $this->errors = array();

        if(empty($POST['nom']) || !preg_match("/^[a-zA-Z]+$/",$POST['nom'])){
            $this->errors['nom'] = "Just les caractere";
        }

        if(empty($POST['prenom']) || !preg_match("/^[a-zA-Z]+$/",$POST['prenom'])){
            $this->errors['prenom'] = "Just les caractere";
        }

        if(empty($POST['email']) || !filter_var( $POST['email'],FILTER_VALIDATE_EMAIL)){
            $this->errors['email'] = "Email not valid";
        }

        $genre = ['female','male'];
        if(empty($POST['genre']) || !in_array($POST['genre'],$genre)){
            $this->errors['genre'] = "genre invalide";
        }
        $genre = ['etudiant','reception','professeur','admin',"super_admin"];
        if(empty($POST['role']) || !in_array($POST['role'],$genre)){
            $this->errors['role'] = "role invalide";
        }

        if(empty($POST['password'])||($POST['password'] !== $POST['password2'])){
            $this->errors['password'] = "The passwords don't match";
        }

        if(strlen($POST["password"]) < 8){
            $this->errors['password'] = "The passwords must be at least 8 caractere long";
        }
        if(count($this->errors) == 0){
            return true;
        }
        return false;
    }
    public function make_user_id($data){
        $data['user_id'] =  bin2hex(random_bytes(64));
        return $data;
    }
    public function make_school_id($data){
        if(isset($_SESSION['USER']->school_id)){
            $data['school_id'] = $_SESSION['USER']->school_id;
        }
        return $data;
    }
}