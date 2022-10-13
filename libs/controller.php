<?php


class Controller
{

    public function __construct()
    {
        error_log('CONTROLLER::CONSTRUCT=>OK');
        $this->view = new View();
    }

    public function loadModel($MODEL)
    {
        $modelFile = 'models/' . $MODEL . '.php';
        if (file_exists($modelFile)) {

            require_once $modelFile;
            $modelName =  ucfirst($MODEL);

            $this->model = new  $modelName();
        }
    }

    public function existsPOST($PARAMS)
    {
        $exist = true;

        foreach ($PARAMS as $param) {
            if (!isset($_POST[$param])) {
                error_log("CONTROLLER::existsPOST => No existe el parametro $param");
                $exist =  false;
            }
        }

        return $exist;
    }

    public function emptyPOST($PARAMS)
    {
        $empty =  false;

        foreach ($PARAMS as $param) {

            if (strlen(trim($_POST[$param])) < 1) {
                error_log("CONTROLLER::existsPOST => No existe el parametro $param");
                $empty =  true;
            }
        }

        return $empty;
    }

    public function existsGET($PARAMS)
    {
        $validation = true;

        foreach ($PARAMS as $param) {
            if (!isset($_GET[$param])) {
                error_log("CONTROLLER::existsGET => No existe el parametro $param");
                $validation =  false;
            }
        }

        return $validation;
    }

    public function redirect($PATH, $MESSAGES)
    {
        $data = [];
        $params = '';

        foreach ($MESSAGES as $key => $message) {

            array_push($data, "$key=$message");
        }

        $params = join('&', $data);

        if ($params != '') {
            $params = "?$params";
        }

        header("Location:" . constant('URL') . "$PATH" . "$params");
    }

    // TODO: ACtualmente en desuso 
    public function getPOST($NAME)
    {
        return $_POST[$NAME];
    }
}
