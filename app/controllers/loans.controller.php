<?php
class LoansController extends Controller
{
    function __construct()
    {
        $this->loadModel();
    }
    function index()
    {
        $loans = $this->model->getAll();
        $this->view(['loans' => $loans]);
    }
    function new()
    {
        $documents = $this->model->getDocuments();
        $members = $this->model->getMembers();
        $this->view([
            'documents' => $documents,
            'members' => $members
        ]);
    }
    function create()
    {
        $documentId = $_POST['documentId'];
        $memberId = $_POST['memberId'];

        $date = $_POST['returnDate'];
        $returnDate = date('Y-m-d', strtotime($date));

        $this->model->insert($documentId, $returnDate, $memberId);

        $this->redirectToAction();
    }
    function delete($id)
    {
        $this->model->delete($id);
        $this->redirectToAction();
    }
}
