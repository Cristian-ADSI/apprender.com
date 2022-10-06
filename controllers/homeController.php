<?php
class HomeController extends Controller
{
    function __construct()
    {
        error_log("HOME_CONTROLLER::CONSTRUCT=>Cargado");
        parent::__construct();
    }

    function loadView(){
        $this->view->render('home');
    }
}