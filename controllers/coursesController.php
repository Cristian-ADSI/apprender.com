<?php
require_once "models/courseModel.php";
class CoursesController extends Controller
{


    function __construct()
    {
        // error_log("COURSES::CONSTRUCT=>Errors cargado");
        parent::__construct();
    }

    function loadView()
    {
        $coursesModel = new CourseModel();


        $courses = $coursesModel->getCourses();

        $this->view->render('courses',$courses);
    }
}
