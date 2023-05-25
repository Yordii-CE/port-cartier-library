<?php
class LoansModel extends Model
{
    function __construct()
    {
        $this->loadDatabase();
    }

    function getAll()
    {
        $loans = $this->db->select("select * from loans where status = 'lent'");
        return $loans;
    }

    function getDocuments()
    {
        $documents = $this->db->select("select distinct documents.*, memberId 'memberId' 
        from documents left join 
        reserves on reserves.documentId = documents.id");

        return $documents;
    }

    function getMembers()
    {
        $members = $this->db->select("select * from users where rol = 'member'");
        return $members;
    }

    function insert($documentId, $returnDate, $memberId)
    {
        $this->db->insert("INSERT INTO loans (documentId, memberId, loanDate, returnDate, status)
      VALUES ($documentId, $memberId, CURRENT_TIMESTAMP(), '$returnDate', 'lent')");
    }

    function delete($id)
    {
        $this->db->insert("DELETE FROM loans WHERE id = $id");
    }
}
