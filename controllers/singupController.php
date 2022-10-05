<?php
class SingupController extends Controller
{
    function __construct()
    {
        error_log("SINGUP_CONTROLLER::CONSTRUCT=>Cargado");
        parent::__construct();
    }

    function loadView(){
        $this->view->render('singup');
    }

    
}
