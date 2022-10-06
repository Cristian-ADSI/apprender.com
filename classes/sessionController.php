<?php
class SessionController extends Controller
{
    private $userSession;
    private $userName;
    private $userId;

    private $session;
    private $sites;
    private $defaultSites;
    private $user;

    function __construct()
    {
        parent::__construct();
        $this->init();
    }


    private function init()
    {
        $access = $this->getJsonFileConfig();

        $this->session =  new Session();
        $this->sites = $access['sites'];
        $this->defaultSites= $access['default-sites'];

        $this->validateSession();
    }

    private function getJsonFileConfig()
    {
        $string = file_get_contents('config/access.json');
        return json_decode($string, true);
    }

    public function validateSession(){
        error_log('SESSION_CONTROLLER::=>ValidateSesion ');

        if ($this->existsSesion()) {
            // $role = $this->getSessionData()->getRole();
        }else{
            //No existe la sesion
        } 
    }

    private function existsSesion(){
        if (!$this->session->exists()) { return false; }
        if ($this->session->getCurrentUser() == NULL) { return false; }

        $currentUser = $this->session->getCurrentUser();

        if (!$currentUser) { return false; }

        return true;
    }

    private function getSessionData(){
        $id = $this->userId;
        $this->login = new LoginModel();

        return $this->login;
    }
}
