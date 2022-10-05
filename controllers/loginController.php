<?php
class LoginController extends Controller
{
    function __construct()
    {
        error_log("LOGIN_CONTROLLER::CONSTRUCT=>Cargado");
        parent::__construct();
    }

    function loadView(){
        $this->view->render('login');
    }
}
