<?php
class ReturnsModel extends Model
{
    function __construct()
    {
        $this->loadDatabase();
    }
    function getAll()
    {
        $returned = $this->db->select("select * from loans where status = 'returned'");
        return $returned;
    }

    function getLoanedDocuments()
    {
        $reserves = $this->db->select("select loans.id 'id', loans.loanDate, users.name, documents.title from loans 
        join documents on loans.documentId = documents.id
        join users on loans.memberId = users.id
        where status = 'lent'");
        return $reserves;
    }

    function insert($loanId)
    {

        $this->db->insert("UPDATE loans set status = 'returned' where id = $loanId");
    }
}
