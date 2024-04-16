<?php
/*
* Users controller 
*/
class Users extends Controller
{
    function index()
    { 
        if(!Auth::logged()){
            $this->redirect("login");
        }
        $user = $this->load_model('user');
        $data = $user ->findAll();
        $this -> view('users',['rows' => $data]);

    }
}