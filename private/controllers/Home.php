<?php
/*
* home controller 
*/
class Home extends Controller
{
    function index()
    {
        $user = $this->load_model("User");
        $data = $user->query("nom","jakhrouti");
        $this->view(" home",['rows'=>$data]);
    }
}