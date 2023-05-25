<?php
class EmployeesController extends Controller
{
    function __construct()
    {
        $this->loadModel();
    }
    function index()
    {
        $this->view();
    }

    function create()
    {
        $name = $_POST['name'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $rol = $_POST['rol'];

        $this->model->insert($name, $lastName, $email, $password, $address, $phone, $rol);
        $this->redirectToAction();
    }
}
