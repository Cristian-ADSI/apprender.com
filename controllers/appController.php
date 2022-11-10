<?php
session_start();
require_once "classes/session.php";
require_once "models/courseModel.php";
require_once "models/reportModel.php";

require_once "libs/dompdf/vendor/autoload.php";
require_once "libs/dompdf/autoload.inc.php";

use Dompdf\Dompdf;

class AppController extends Controller
{
    public function __construct()
    {
        // error_log("APP_CONTROLLER::CONSTRUCT=>Loaded");
        parent::__construct();
    }

    public function loadView()
    {
        if ($_SESSION['sessionRole'] == 2) {
            $courses = $this->loadTeacherCourses();
            $this->view->render('app', $courses);
        } elseif ($_SESSION['sessionRole'] == 3) {
            $report = $this->loadReport_1();
            $this->view->render('app', $report);
        } else {
            $this->view->render('app');
        }
    }

    public function closeSession()
    {
        $session = new Session();
        $session->closeSession();
        header("Location:" . constant('URL'));
    }

    private function loadTeacherCourses()
    {
        $model = new CourseModel();
        $courses = $model->getCoursesByTeacher($_SESSION['sessionIdUser']);

        return $courses;
    }

    public function createCourse()
    {
        $_POST['activo'] = 1;
        $_POST['id_curso'] = '';
        $_POST['profesor'] = $_SESSION['sessionIdUser'];
        $_POST['imagen'] = $_FILES['imagen']['name'];

        $model = new CourseModel();
        $model->upCover($_FILES);
        $model->createCourse($_POST);
        $this->redirect('app', []);
        return;
    }

    public function deleteCourse()
    {
        $model = new CourseModel();
        $model->unactiveCourse($_GET['id']);
        $this->redirect('app', []);
        return;
    }

    private function loadReport_1()
    {

        $model = new ReportModel();

        if (!isset($_GET['report'])) {
            $report = $model->reportOne();
            return $report;
        }
    }

    public function loadReport_2()
    {
        $model = new ReportModel();

        $report = $model->reportTwo($_POST['curso']);
        $_SESSION['report2']= $report;

        $this->redirect('app?report=report_2',[]);
        return;
    }

    public function loadReport_3()
    {
        $model = new ReportModel();

        $report = $model->reportThree($_POST['año'], $_POST['mes_inicial'], $_POST['mes_final']);
        $_SESSION['report3']= $report;

        $this->redirect('app?report=report_3',[]);

        // echo "<pre>";
        // var_dump($report);
        // echo "</pre>";
        return;
    }
}
