<?php
/*
* USER Model 
*/

class User extends Model
{
    protected $allowedColumns = [
        'nom',
        'prenom',
        'email',
        'password',
        'genre',
        'role',
        'date',
        // 'user_id',
    ];
    protected $beforeInsert = [
        'make_user_id',
        'make_school_id',
        'hash_password'
    ];

    public function validate($POST){
        $this->errors = array();

        if(empty($POST['nom']) || !preg_match("/^[a-zA-Z]+$/",$POST['nom'])){
            $this->errors['nom'] = "Uniquement des caractères!";
        }

        if(empty($POST['prenom']) || !preg_match("/^[a-zA-Z]+$/",$POST['prenom'])){
            $this->errors['prenom'] = "Uniquement des caractères!";
        }

        if(empty($POST['email']) || !filter_var( $POST['email'],FILTER_VALIDATE_EMAIL)){
            $this->errors['email'] = "Adresse email invalide!";
        }
        if($this->where('email',$POST['email'])){
            $this->errors['email'] = "Adresse email déja prise!";
        }

        $genre = ['female','male'];
        if(empty($POST['genre']) || !in_array($POST['genre'],$genre)){
            $this->errors['genre'] = "Genre invalide!";
        }
        $genre = ['etudiant','reception','professeur','admin',"super_admin"];
        if(empty($POST['role']) || !in_array($POST['role'],$genre)){
            $this->errors['role'] = "Role invalide!";
        }

        if(empty($POST['password'])||($POST['password'] !== $POST['password2'])){
            $this->errors['password'] = "Les mots de passe doivent être similaires!";
        }

        if(strlen($POST["password"]) < 8){
            $this->errors['password'] = "Le mot de passe doit comporter au moins 8 caractères!";
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
    public function hash_password($data){

        $data['password'] = password_hash($data['password'],PASSWORD_DEFAULT);
        return $data;
    }

}