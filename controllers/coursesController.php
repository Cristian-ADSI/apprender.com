<?php

class CoursesController extends Controller
{


    function __construct()
    {
        // error_log("COURSES::CONSTRUCT=>Errors cargado");
        parent::__construct();
    }

    function loadView(){
        $this->view->render('courses');
    }
}