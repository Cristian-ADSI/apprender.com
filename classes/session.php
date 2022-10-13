<?PHP 

class Session{

    private $sessionName   ='user';
    private $sessionRole   ='role';
    private $sessionIdUser ='name';

    function __construct($ID_USER="", $ROLE="", $NAME="",$IMAGE=""){

        if (session_status() !== PHP_SESSION_ACTIVE) { session_start(); }

        $this->sessionName      =  $NAME;
        $this->sessionRole      =  $ROLE;
        $this->sessionIdUser    =  $ID_USER;

        $_SESSION['sessionName']    = $NAME;
        $_SESSION['sessionRole']    = $ROLE;
        $_SESSION['sessionIdUser']  = $ID_USER;
        $_SESSION['sessionImage']   = $IMAGE;
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