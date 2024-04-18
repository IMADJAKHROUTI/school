<?php
/*
* SCHOOL Model 
*/

class School extends Model
{
    protected $allowedColumns = [
        'school',
        'date',
    ];
    protected $beforeInsert = [
        'make_school_id',
        'make_user_id',

    ];

    public function validate($POST)
    {
        $this->errors = array();

        if (empty($POST['school']) || !preg_match("/^[a-zA-Z]+$/", $POST['school'])) {
            $this->errors['school'] = "Uniquement des caractères!";
        }

        if (count($this->errors) == 0) {
            return true;
        }
        return false;
    }

    public function make_school_id($data)
    {
        $data['school_id'] =  bin2hex(random_bytes(64));
        return $data;
    }
    public function make_user_id($data)
    {
        $data['user_id'] =  bin2hex(random_bytes(64));
        return $data;
    }
}