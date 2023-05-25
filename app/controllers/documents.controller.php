<?php
class DocumentsController extends Controller
{
    function __construct()
    {
        $this->loadModel();
    }
    function index($filter = 'All')
    {
        $documents = $this->model->getAll();
        if ($filter == "reserved") {
            $documents = $this->model->getReserved();
        }
        if ($filter == "lent") {
            $documents = $this->model->getLent();
        }
        if ($filter == "expired") {
            $documents = $this->model->getExperid();
        }

        $pattern = isset($_POST['pattern']) ? $_POST['pattern'] : '';

        $documents = array_filter($documents, function ($document) use ($pattern) {
            $title = $document['title'];
            return strpos(strtolower($title), strtolower($pattern)) !== false;
        });


        $this->view(
            'index',
            [
                'documents' => $documents,
                'optionSelected' => $filter,
                'patternWritten' => $pattern
            ]
        );
    }
}
