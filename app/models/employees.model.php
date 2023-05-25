<?php
class EmployeesModel extends Model
{
    function __construct()
    {
        $this->loadDatabase();
    }
    function insert($name, $lastName, $email, $password, $address, $phone, $rol)
    {
        $this->db->insert("INSERT INTO users (name, lastName, email, password, address, phone, rol)
       VALUES ('$name', '$lastName', '$email', '$password', '$address', '$phone', '$rol')");
    }
}
