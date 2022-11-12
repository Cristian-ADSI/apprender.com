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

        $userModel = new UserModel();

        if (!$users = $userModel->getUser($_POST['idUser'])) {
            $this->redirect('login', ['error' => ErrorMessages::ERORR_AUTH_NOT_EXISTS_USER]);
            return;
        }

        
        // echo "<pre>";
        // var_dump($users);
        // echo "</pre>";
        
        $roleVerify = false;
        foreach ($users as $user) {
            if ($user['roles'] == $_POST['role']) {
                $roleVerify = true;
            }
        }
        if ($roleVerify == false) {
            $this->redirect('login', ['error' => ErrorMessages::ERORR_AUTH_NOT_INVALID_ROLE]);
            return;
        }


        $paswordVerify = false;
        foreach ($users as $user) {
            if (  password_verify($_POST['password'],$user['password']) ) {
                $paswordVerify = true;
            }
        }
        if ($paswordVerify == false) {
            $this->redirect('login', ['error' => ErrorMessages::ERORR_AUTH_NOT_INVALID_PASS]);
            return;
        }

        $userModel->startSession($_POST['role']);

        $this->redirect('app', []);
    }
}
