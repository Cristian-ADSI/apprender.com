<?php
require_once "models/courseModel.php";
class ThemesController extends Controller
{
    public function __construct()
    {
        // error_log("THEMES_CONTROLLER::CONSTRUCT=>Loaded");
        parent::__construct();
    }

    public function loadView()
    {   

        $coursesModel = new CourseModel();

        $_GET['theme'];

        $themes =  $coursesModel->getThemes($_GET['theme']);
        $themesandThematics = $coursesModel->getThemsAndThematics($themes);
        $this->view->render('themes', $themesandThematics);
    }


}
