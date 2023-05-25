<?php
class ReservesModel extends Model
{
    function __construct()
    {
        $this->loadDatabase();
    }
    function getAll()
    {
        $reserves = $this->db->select("select * from reserves");
        return $reserves;
    }

    function getDocuments()
    {
        $reserves = $this->db->select("select * from documents");
        return $reserves;
    }

    function getMembers()
    {
        $reserves = $this->db->select("select * from users where rol = 'member'");
        return $reserves;
    }

    function insert($documentId, $memberId)
    {
        $this->db->insert("INSERT INTO reserves (documentId, memberId, bookingDate)
       VALUES ($documentId, $memberId, CURRENT_TIMESTAMP())");
    }

    function delete($id)
    {
        $this->db->insert("DELETE FROM reserves WHERE id = $id");
    }
}
