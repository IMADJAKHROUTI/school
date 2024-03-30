<?php 
/*
* Students controller 
*/
class Students extends Controller{
    function index()
    {
        echo $this->view("Students");
    }
}