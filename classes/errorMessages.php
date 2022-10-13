<?php
class ErrorMessages
{

    // ERROR_CONTROLLER_METHOD_ACTION
    public const ERORR_ADMIN_TEST             = "test";
    public const ERORR_AUTH_EMPTY_FIELD       = "auth001";
    public const ERORR_AUTH_INVALID_EMAIL     = "auth002";
    public const ERORR_AUTH_DIFERENT_PASSWORD = "auth003";
    public const ERORR_AUTH_INVALIDT_PASSWORD = "auth004";
    public const ERORR_AUTH_EMPTY_ROLE        = "auth005";
    public const ERORR_AUTH_EXISTS_USER       = "auth006";
    public const ERORR_AUTH_EXISTS_EMAIL      = "auth007";
    public const ERORR_AUTH_CREATE_USER       = "auth008";
    public const ERORR_AUTH_CREATE_ROLE       = "auth009";
    public const ERORR_AUTH_NOT_EXISTS_USER   = "auth010";
    public const ERORR_AUTH_NOT_INVALID_ROLE  = "auth011";
    public const ERORR_AUTH_NOT_INVALID_PASS  = "auth012";

    public const ERORR_ENROLL_CREATE_FAILED  = "enroll012";


    private $errorList = [];


    public function __construct()
    {
        $this->errorList = [
            ErrorMessages::ERORR_ADMIN_TEST                 => 'Mensaje de error exitoso!',
            ErrorMessages::ERORR_AUTH_EMPTY_FIELD         => 'No debes dejar campos vacios',
            ErrorMessages::ERORR_AUTH_INVALID_EMAIL       => 'El email ingresado no es valido',
            ErrorMessages::ERORR_AUTH_DIFERENT_PASSWORD   => 'Ambas contraseñas deben ser iguales',
            ErrorMessages::ERORR_AUTH_INVALIDT_PASSWORD   => 'La  contrasena debe tener entre 8 y 16 caracteres y contener almenos una mayuscula, una minuscula y un numero del 0 al 9',
            ErrorMessages::ERORR_AUTH_EMPTY_ROLE          => 'Debes elegir al menos un rol',
            ErrorMessages::ERORR_AUTH_EXISTS_USER         => 'El usuario ingresado ya existe en el sitema',
            ErrorMessages::ERORR_AUTH_EXISTS_EMAIL        => 'El email ingresado ya existe en el sitema',
            ErrorMessages::ERORR_AUTH_CREATE_USER         => 'Eror al crear el usuario',
            ErrorMessages::ERORR_AUTH_CREATE_ROLE         => 'Eror al crear el role',
            ErrorMessages::ERORR_AUTH_NOT_EXISTS_USER     => 'El usuarion ingreado no existe en el sistema',
            ErrorMessages::ERORR_AUTH_NOT_INVALID_ROLE    => 'El perfil ingresado no es valido para este usuario',
            ErrorMessages::ERORR_AUTH_NOT_INVALID_PASS    => 'La contraseña ingresada no es valida',

            ErrorMessages::ERORR_ENROLL_CREATE_FAILED    => 
            "<div class='alert alert-danger m-1'>
                Error al realiar la matricula
            </div>
            "
        ];
    }

    public function getError($CODE)
    {
        return $this->errorList[$CODE];
    }

    public function existsKey($CODE)
    {
        if (array_key_exists($CODE, $this->errorList)) {
            return true;
        } else {
            return false;
        }
    }
}
