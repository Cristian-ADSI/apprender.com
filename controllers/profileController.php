<?php

class ProfileController extends Controller
{


    function __construct()
    {
        // error_log("PROFILE_CONTROLLER::CONSTRUCT=>Loaded");
        parent::__construct();
    }

    function loadView(){
        $this->view->render('profile');
    }
}