<?php
/*
* schools controller 
*/
class Schools extends Controller
{
    function index()
    {
        if (!Auth::logged()) {
            $this->redirect("login");
        }
        $school = new School();
        $data = $school->findAll();
        $this->view('schools', ['rows' => $data]);
    }
}
