<?php
class ProgressController extends Controller
{
    function __construct()
    {
        error_log("APP_CONTROLLER::CONSTRUCT=>Cargado");
        parent::__construct();
    }

    function loadView(){
        $this->view->render('progress');
    }
    
}