<?php
class DocumentsModel extends Model
{
    function __construct()
    {
        $this->loadDatabase();
    }

    function getAll()
    {
        $documents = $this->db->select("select * from documents");
        return $documents;
    }

    function getReserved()
    {
        $documents = $this->db->select("select documents.* from reserves 
        join documents on reserves.documentId = documents.id");

        return $documents;
    }

    function getLent()
    {
        $documents = $this->db->select("select documents.* from loans 
        join documents on loans.documentId = documents.id");
        return $documents;
    }

    function getExperid()
    {
        $documents = $this->db->select("select documents.* from loans 
        join documents on loans.documentId = documents.id where NOW() > loans.returnDate");
        return $documents;
    }
}
