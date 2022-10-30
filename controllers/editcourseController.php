<?php
session_start();
require_once "models/courseModel.php";
class EditcourseController extends Controller
{

    function __construct()
    {
        // error_log("EDIT_COURSE_CONTROLLER::CONSTRUCT=>Loaded");
        parent::__construct();
    }

    function loadView()
    {
        $model = new CourseModel();

        $course['course'] = $model->getCourseByIdCourse($_GET['id']);
        $this->view->render('editcourse', $course);
    }

    public function  course()
    {
        $model = new CourseModel();

        var_dump($_POST);
        // var_dump($_FILES);

        // $model->unlinkImage(constant($_POST['cover']);

        $model->setName($_POST['nombre']);
        $model->setImage($_FILES['imagen']['name']);
        $model->setDescription($_POST['descripcion']);
        $model->setStarDate($_POST['fecha_inicial']);
        $model->setendDate($_POST['fecha_final']);
        $model->setValue($_POST['valor']);

        $model->updateCourse($_GET['id']);

        echo 'editando';
        die;
    }
}
