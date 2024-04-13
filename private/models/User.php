<?php
/*
* USER Model 
*/
class User extends Model
{
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
}