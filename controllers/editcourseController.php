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
        $themes = $model->getThemes($_GET['idc']);
        $course['content'] = $model->getThemsAndThematics($themes);

        $course['course'] = $model->getCourseByIdCourse($_GET['idc']);

        $this->view->render('editcourse', $course);
    }

    public function  course()
    {
        $model = new CourseModel();

        // $model->unlinkImage(constant($_POST['cover']);

        $model->setName($_POST['nombre']);
        // $model->setImage($_FILES['imagen']['name']);
        $model->setDescription($_POST['descripcion']);
        $model->setStarDate($_POST['fecha_inicial']);
        $model->setendDate($_POST['fecha_final']);
        $model->setValue($_POST['valor']);

        $model->updateCourse($_GET['idc']);
        $this->redirect("editcourse?idc=" . $_GET['idc'], []);
        return;
    }

    public function  theme()
    {
        $model = new CourseModel();
        $model->updateTheme($_POST);
        $this->redirect("editcourse?idc=" . $_GET['idc'], []);
        return;
    }

    public function thematics()
    {
        $model = new CourseModel();
        $model->updateThematics($_POST);
        $this->redirect("editcourse?idc=" . $_GET['idc'], []);
        return;
    }

    public function newTheme()
    {
        $model = new CourseModel();
        $idTheme = $model->createTheme($_POST);
        var_dump($idTheme);
        $model->createCoursesTheme($_GET['idc'], $idTheme);
        $this->redirect("editcourse?idc=" . $_GET['idc'], []);
        return;
    }

    public function newThematic()
    {
        $model = new CourseModel();
        echo "nueva tematica";
        die;

        $idTheme = $model->createTheme($_POST);
        var_dump($idTheme);
        $model->createCoursesTheme($_GET['idc'], $idTheme);
        $this->redirect("editcourse?idc=" . $_GET['idc'], []);
        return;
    }
}
