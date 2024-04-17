<?php
/*
* SCHOOL Model 
*/

class School extends Model
{


    public function validate($POST)
    {
        $this->errors = array();

        if (empty($POST['school']) || !preg_match("/^[a-zA-Z]+$/", $POST['school'])) {
            $this->errors['school'] = "Just les caractere";
        }

        if (count($this->errors) == 0) {
            return true;
        }
        return false;
    }
}