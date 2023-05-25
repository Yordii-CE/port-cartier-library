<?php
class ReturnsController extends Controller
{
    function __construct()
    {
        $this->loadModel();
    }
    function index()
    {
        $returned = $this->model->getAll();
        $this->view(['returned' => $returned]);
    }

    function new()
    {
        $loanedDocuments = $this->model->getLoanedDocuments();
        $this->view(['loanedDocuments' => $loanedDocuments]);
    }

    function create()
    {
        $loanId = $_POST['loanId'];
        $this->model->insert($loanId);
        $this->redirectToAction();
    }
}
