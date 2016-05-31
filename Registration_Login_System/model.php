<?php
include 'database.php';
class model

{
    public function insert($formvalues)
    {
        $query = "insert into users (fname,email,password,gender,dob) values ('$formvalues[0]','$formvalues[1]',
'$formvalues[2]','$formvalues[3]','$formvalues[4]')";
        $db = new DataBase();
        $db->insert($query);
    }
    public function select($email,$passd)
    {
        $query = "select * from users where email = '".$email."' and password = '".$passd."'";
        $db = new DataBase();
        $data =  $db->select($query);
        return $data;
    }

}