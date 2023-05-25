<?php
class MembersController extends Controller
{
    function __construct()
    {
        $this->loadModel();
    }
    function index()
    {
        $members = $this->model->getAll();
        $this->view(['members' => $members]);
    }
    function new()
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
        $rol = 'member';

        $this->model->insert($name, $lastName, $email, $password, $address, $phone, $rol);
        $this->redirectToAction();
    }

    function find($memberId = null)
    {
        $members = $this->model->getAll();

        if ($memberId == null) {
            $this->view(
                [
                    'members' => $members
                ]
            );
            return;
        }

        $loans = $this->model->getMemberLoans($memberId);
        $reserves = $this->model->getMemberReserves($memberId);

        $this->view(
            [
                'members' => $members,
                'loans' => $loans,
                'reserves' => $reserves
            ]
        );
    }
}
