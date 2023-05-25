<?php
class ReserveController extends Controller
{
    function __construct()
    {
        $this->loadModel();
    }
    function index()
    {
        $documents = $this->model->getDocuments();
        $this->view(['documents' => $documents]);
    }
    function create()
    {
        $documentId = $_POST['documentId'];
        $memberId = $_SESSION['user']['id']; //Find memberId/userId of session

        $this->model->insert($documentId, $memberId);
        $this->redirectToAction();
    }
}
