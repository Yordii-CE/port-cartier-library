<?php
class ReserveModel extends Model
{
    function __construct()
    {
        $this->loadDatabase();
    }
    function getDocuments()
    {
        $reserves = $this->db->select("select * from documents");
        return $reserves;
    }
    function insert($documentId, $memberId)
    {
        $this->db->insert("INSERT INTO reserves (documentId, memberId, bookingDate)
      VALUES ($documentId, $memberId, CURRENT_TIMESTAMP())");
    }
}
