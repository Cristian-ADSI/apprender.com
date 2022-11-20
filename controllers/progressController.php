<?php
require_once "models/courseModel.php";
session_start();



class ProgressController extends Controller
{
    function __construct()
    {
        // error_log("PROGRESS_CONTROLLER::CONSTRUCT=>Loaded");
        parent::__construct();
    }

    function loadView(){

        $coursesModel = new CourseModel();
        $idUser = $_SESSION['sessionIdUser'];

        $courses = $coursesModel->getCoursesByUser($idUser);

        $this->view->render('progress', $courses);
    }
    
}
