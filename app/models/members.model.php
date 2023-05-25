<?php
class MembersModel extends Model
{
    function __construct()
    {
        $this->loadDatabase();
    }

    function getAll()
    {
        $members = $this->db->select("select * from users where rol = 'member'");
        return $members;
    }

    function getMemberLoans($id)
    {
        $loans = $this->db->select("select documents.* from loans 
        join documents on loans.documentId = documents.id where memberId = $id and status = 'lent'");

        return $loans;
    }

    function getMemberReserves($id)
    {
        $reserves = $this->db->select("select documents.* from reserves 
        join documents on reserves.documentId = documents.id where memberId = $id");

        return $reserves;
    }

    function insert($name, $lastName, $email, $password, $address, $phone, $rol)
    {
        $this->db->insert("INSERT INTO users (name, lastName, email, password, address, phone, rol)
        VALUES ('$name', '$lastName', '$email', '$password', '$address', '$phone', '$rol')");
    }
}
