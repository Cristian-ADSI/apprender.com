<?php
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

}
