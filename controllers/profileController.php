<?php
session_start();
require_once 'models/userModel.php';
class ProfileController extends Controller
{


    public function __construct()
    {
        // error_log("PROFILE_CONTROLLER::CONSTRUCT=>Loaded");
        parent::__construct();
    }

    public function loadView()
    {
        $idUser = $_SESSION['sessionIdUser'];
        $model = new UserModel();
        $model->getUser($idUser);
        $user = $model->getModel();
        $this->view->render('profile', $user);
    }

    public function update()
    {

        $model = new UserModel();


        $model->setModel($_POST);


        if (isset($_POST['deleteImage'])) {
            $model->deleteImage($_POST['id_usuario']);
            $model->unlinkImage($_POST['id_usuario']);
            $this->redirect('profile', ['success' => SuccesserMessages::SUCCESS_DELETE_IMAGE]);
            return;
        }

        if (!empty($_FILES['imagen']['name'])) {
            $model->unlinkImage($_POST['id_usuario']);
            $model->upImage($_FILES, $_POST['id_usuario']);
        }

        $model->updateUser();

        $this->redirect('profile', ['success' => SuccesserMessages::SUCCESS_UPDATE_USER]);
        return;
    }
}
