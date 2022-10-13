<?php
require_once "models/enrollmentModel.php";

class EnrollmentController extends Controller
{
    public function __construct()
    {
        // error_log("ENROLLMENT_CONTROLLER::CONSTRUCT=>Loaded");
        parent::__construct();
    }

    public function loadView()
    {
        $this->view->render('enrollment');
    }

    public function enroll(){

        $params = [
            'idCourse',
            'idUser',
            'erollmentDate',
        ];
        
        if (!$this->existsPOST($params)) {
            $this->redirect('enrollment', [
                'error' => ErrorMessages::ERORR_AUTH_EMPTY_FIELD,
                'idCourse'=> $_POST['idCourse']
            ]);
            return;
        }

        if ($this->emptyPOST($params)) {
            $this->redirect('enrollment', ['error' => ErrorMessages::ERORR_AUTH_EMPTY_FIELD]);
            return;
        }       
        
        $enrollment = new EnrollmentModel();
        $enrollment->setModel($_POST);

        if (!$enrollment->create()) {
            $this->redirect('enrollment', ['error' => ErrorMessages::ERORR_ENROLL_CREATE_FAILED]);
            return;
        }

        $this->redirect('enrollment', [
            'success' => SuccesserMessages::SUCCESS_ENROLL_ENROLL_CREATED,
            'idCourse'=> $_POST['idCourse']
        ]);

    }

}
