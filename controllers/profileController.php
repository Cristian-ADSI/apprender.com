<?php
session_start();
require_once 'models/userModel.php';
class ProfileController extends Controller
{


    function __construct()
    {
        // error_log("PROFILE_CONTROLLER::CONSTRUCT=>Loaded");
        parent::__construct();
    }

    function loadView()
    {
        $idUser = $_SESSION['sessionIdUser'];
        $model = new UserModel();
        $model->getUser($idUser);
        $user = $model->getModel();
        $this->view->render('profile', $user);
    }
}
