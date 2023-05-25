<?php
class LoginController extends Controller
{

    function __construct()
    {
        $this->loadModel();
    }

    function index()
    {
        $this->view(false);
    }

    function signin()
    {
        $email = $_POST["email"];
        $password = $_POST["password"];

        $user = $this->model->getUser($email, $password);

        if ($user == null) $this->redirectToAction();
        else {
            $_SESSION['user'] = $user;
            $this->redirectToAction('index', 'documents');
        }
    }

    function signout()
    {
        session_destroy();
        $this->redirectToAction();
    }
}
