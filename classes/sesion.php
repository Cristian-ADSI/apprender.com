<?PHP 

class Session{

    private $sessionName ='user';
    private $sessionRole ='role';

    function __construct(){

        if (session_status()) { session_start(); }
    }

    public function setCurrentUser($USER){
        $_SESSION[$this->sessionName]=$USER;
    }

    public function getCurrentUser(){
        return $_SESSION[$this->sessionName];
    }

    public function closeSession(){
        session_unset();
        session_destroy();
    }

    public function exists(){
        return isset($_SESSION[$this->sessionName]);
    }
}