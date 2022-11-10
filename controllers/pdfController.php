<?php
class PdfController extends Controller
{
    public function __construct()
    {
        // error_log("PDF_CONTROLLER::CONSTRUCT=>Loaded");
        parent::__construct();
    }

    public function loadView()
    {
        $this->view->render('pdf');
    }
}
