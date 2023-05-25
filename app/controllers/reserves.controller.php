<?php
class ReservesController extends Controller
{
    function __construct()
    {
        $this->loadModel();
    }
    function index()
    {
        $reserves = $this->model->getAll();
        $this->view(['reserves' => $reserves]);
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

        $this->model->insert($documentId, $memberId);
        $this->redirectToAction();
    }
    function delete($id)
    {
        $this->model->delete($id);
        $this->redirectToAction();
    }
}
