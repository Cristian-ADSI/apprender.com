<?php
require_once "models/userModel.php";
class SingupController extends Controller
{
    public function __construct()
    {
        // error_log("SINGUP_CONTROLLER::CONSTRUCT=>Loaded");
        parent::__construct();
    }

    public function loadView()
    {
        $this->view->render('singup', []);
    }

    public function newUser()
    {
        $params = [
            'idUser',
            'name',
            'lastname',
            'phone',
            'email',
            'password',
            'password_conf',
        ];

        if (!$this->existsPOST($params)) {
            $this->redirect('singup', ['error' => ErrorMessages::ERORR_AUTH_EMPTY_FIELD]);
            return;
        }

        if ($this->emptyPOST($params)) {
            $this->redirect('singup', ['error' => ErrorMessages::ERORR_AUTH_EMPTY_FIELD]);
            return;
        }

        if (!$this->validEmail($_POST['email'])) {
            $this->redirect('singup', ['error' => ErrorMessages::ERORR_AUTH_INVALID_EMAIL]);
            return;
        }

        if (!$this->comparePasswords($_POST['password'], $_POST['password_conf'])) {
            $this->redirect('singup', ['error' => ErrorMessages::ERORR_AUTH_DIFERENT_PASSWORD]);
            return;
        }

        if (!$this->validPassword($_POST['password'])) {
            $this->redirect('singup', ['error' => ErrorMessages::ERORR_AUTH_INVALIDT_PASSWORD]);
            return;
        }

        if (is_null($_POST['roles'])) {
            $this->redirect('singup', ['error' => ErrorMessages::ERORR_AUTH_EMPTY_ROLE]);
            return;
        }

        $user = new UserModel();

        if ($user->exists('id_usuario', $_POST['idUser'],)) {
            $this->redirect('singup', ['error' => ErrorMessages::ERORR_AUTH_EXISTS_USER]);
            return;
        }

        if ($user->exists('correo', $_POST['email'],)) {
            $this->redirect('singup', ['error' => ErrorMessages::ERORR_AUTH_EXISTS_EMAIL]);
            return;
        }

        $user->setIdUser($_POST['idUser']);
        $user->setName($_POST['name']);
        $user->setLastname($_POST['lastname']);
        $user->setPhone($_POST['phone']);
        $user->setEmail($_POST['email']);
        $user->setPassword($_POST['password']);
        $user->setRoles($_POST['roles']);

        if (!$user->create()) {
            $this->redirect('singup', ['error' => ErrorMessages::ERORR_AUTH_CREATE_USER]);
            return;
        }

        if (!$user->createRoles()) {
            $this->redirect('singup', ['error' => ErrorMessages::ERORR_AUTH_CREATE_ROLE]);
            return;
        }

        $this->redirect('login', ['success' => SuccesserMessages::SUCCESS_SINGUP_USER_CREATED]);
    }

    private function validEmail($EMAIL)
    {
        if (filter_var($EMAIL, FILTER_VALIDATE_EMAIL)) {
            return true;
        } else {
            return false;
        }
    }

    private function validPassword($PASSWORD)
    {
        if (strlen($PASSWORD) < 8) {
            return false;
        }

        if (strlen($PASSWORD) > 16) {
            return false;
        }

        if (!preg_match('`[a-z]`', $PASSWORD)) {
            return false;
        }
        if (!preg_match('`[A-Z]`', $PASSWORD)) {
            return false;
        }
        if (!preg_match('`[0-9]`', $PASSWORD)) {
            return false;
        }
        return true;
    }

    private function comparePasswords($PASSWORD, $PASsWORD_CONF)
    {
        if (strcmp($PASSWORD, $PASsWORD_CONF) === 0) {
            return true;
        } else {
            return false;
        }
    }
}
