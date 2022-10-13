<?php
class App
{
    function __construct()
    {
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);


        // No se especifico controlador en la url 
        if (empty($url[0])) {
            $this->redirectHome();
            return;
        }

        // No existe el controlador especificado
        $fileController = "controllers/$url[0]Controller.php";
        if (!file_exists($fileController)) {
            $this->redirectErrors('controlador', $url[0]);
            return;
        }

        $controller = $this->loadController($fileController, $url);

        $model = $url[0] . 'Model';
        $controller->loadModel($model);

        //No se especifico metodo en la url
        $method = isset($url[1]) ? $url[1] : null;
        if (is_null($method)) {
            $controller->loadView();
            return;
        }

        //No existe el metodo especificado
        if (!method_exists($controller, $method)) {
            $this->redirectErrors('metodo', $url[1]);
        }

        //No tiene parametros
        $params = isset($url[2]) ? $url[2] : null;
        if (is_null($params)) {
            $controller->{$method}();
            $controller->loadView();
            return;
        }


        $numOfParams = count($url) - 2;

        $paramList = [];

        for ($i = 0; $i < $numOfParams; $i++) {
            array_push($paramList, $url[$i] + 2);
        }

        $controller->{$method}($paramList);
    }


    private function loadController($FILE_CONTROLLER, $URL)
    {
        require_once $FILE_CONTROLLER;

        $controller = ucfirst($URL[0]) . 'Controller';
        $controller =  new $controller();
        return $controller;
    }

    private function redirectErrors($TYPE, $NAME)
    {
        error_log("APP::constructor=>No existe el $TYPE $NAME");

        $fileController = 'controllers/errorsController.php';
        require_once $fileController;

        $controller = new ErrorsController();
        $controller->loadView();
    }

    private function redirectHome()
    {
        error_log("APP::constructor=>No se especifico controlador");

        $fileController = 'controllers/homeController.php';
        require_once $fileController;

        $controller = new HomeController();
        $controller->loadModel('home');
        $controller->loadView();
    }
    // TODO: Actualmente en desuso 
    private function redirectLogin()
    {
        error_log("APP::constructor=>No se especifico controlador");

        $fileController = 'controllers/loginController.php';
        require_once $fileController;

        $controller = new LoginController();
        $controller->loadModel('login');
        $controller->loadView();
    }
}
