<?php

class ErrorsController extends Controller
{


    function __construct()
    {
        error_log("ERROR_CONTROLLER::CONSTRUCT=>Loaded");
        parent::__construct();
    }

    function loadView(){
        $this->view->render('errors');
    }
}
