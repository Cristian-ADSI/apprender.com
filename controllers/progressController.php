<?php
class ProgressController extends Controller
{
    function __construct()
    {
        // error_log("PROGRESS_CONTROLLER::CONSTRUCT=>Loaded");
        parent::__construct();
    }

    function loadView(){
        $this->view->render('progress');
    }
    
}