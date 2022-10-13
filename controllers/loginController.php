<?php
require_once "models/userModel.php";
class LoginController extends Controller
{
    function __construct()
    {
        // error_log("LOGIN_CONTROLLER::CONSTRUCT=>Loaded");
        parent::__construct();
    }

    function loadView()
    {
        $this->view->render('login');
    }

    public function access()
    {
        $params = [
            'idUser',
            'password',
            'role',
        ];

        if (!$this->existsPOST($params)) {
            $this->redirect('login', ['error' => ErrorMessages::ERORR_AUTH_EMPTY_FIELD]);
            return;
        }

        if ($this->emptyPOST($params)) {
            $this->redirect('login', ['error' => ErrorMessages::ERORR_AUTH_EMPTY_FIELD]);
            return;
        }

        $user = new UserModel();

        if (!$user->getUser($_POST['idUser'])) {
            $this->redirect('login', ['error' => ErrorMessages::ERORR_AUTH_NOT_EXISTS_USER]);
            return;
        }

        if ($_POST['role'] != $user->getRoles()) {
            $this->redirect('login', ['error' => ErrorMessages::ERORR_AUTH_NOT_INVALID_ROLE]);
            return;
        }

        if (!$user->comparePasswords($_POST['password'])) {
            $this->redirect('login', ['error' => ErrorMessages::ERORR_AUTH_NOT_INVALID_PASS]);
            return;
        }

        $user->startSession();

        $this->redirect('app', []);
    }
}
