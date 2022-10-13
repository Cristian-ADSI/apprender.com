<?php
require_once "classes/session.php";
class AppController extends Controller
{
    public function __construct()
    {
        // error_log("APP_CONTROLLER::CONSTRUCT=>Loaded");
        parent::__construct();
    }

    public function loadView()
    {
        $this->view->render('app');
    }

    public function closeSession()
    {
        $session = new Session();
        $session->closeSession();
        header("Location:" . constant('URL'));
    }
}
