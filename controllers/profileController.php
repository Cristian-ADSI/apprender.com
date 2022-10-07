<?php

class ProfileController extends Controller
{


    function __construct()
    {
        // error_log("PROFILE::CONSTRUCT=>Errors cargado");
        parent::__construct();
    }

    function loadView(){
        $this->view->render('profile');
    }
}