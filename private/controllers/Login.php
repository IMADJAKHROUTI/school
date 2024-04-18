<?php
/*
* Login controller 
*/
class Login extends Controller
{
    function index()
    {
        $errors = array();
        if(count($_POST) > 0){
            $user = new User();

           if( $row = $user->where("email",$_POST['email'])){
                $row = $row[0];
                if(password_verify($_POST['password'],$row->password)){
                    Auth::isAuthenticated($row);
                    $this->redirect('/home');
                }
                else{
                    $errors['password'] = "Mot de passe inccorect!";
                }
                
           }else{
            $errors['email'] = "Adresse email introuvabale!";
           }
        }

        $this->view("login",['errors'=>$errors]);
    }
}