<?php

class LoginModel extends Model
{
    function __construct()
    {
        $this->loadDatabase();
    }

    function getUser($email, $password)
    {
        $users = $this->db->select("select * from users where email = '$email' and password = '$password'");
        return count($users) == 0 ? null : $users[0];
    }
}
