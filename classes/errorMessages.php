<?php
class ErrorMessages
{

    // ERROR_CONTROLLER_METHOD_ACTION
    public const ERORR_ADMIN_TEST               = "test";
    public const ERORR_SINGUP_EMPTY_FIELD       = "singup001";
    public const ERORR_SINGUP_INVALID_EMAIL     = "singup002";
    public const ERORR_SINGUP_DIFERENT_PASSWORD = "singup003";
    public const ERORR_SINGUP_INVALIDT_PASSWORD = "singup004";
    public const ERORR_SINGUP_EMPTY_ROLE        = "singup005";
    public const ERORR_SINGUP_EXISTS_USER       = "singup006";
    public const ERORR_SINGUP_EXISTS_EMAIL      = "singup007";
    public const ERORR_SINGUP_CREATE_USER       = "singup008";
    public const ERORR_SINGUP_CREATE_ROLE       = "singup009";


    private $errorList = [];


    public function __construct()
    {
        $this->errorList = [
            ErrorMessages::ERORR_ADMIN_TEST                 => 'Mensaje de error exitoso!',
            ErrorMessages::ERORR_SINGUP_EMPTY_FIELD         => 'No debes dejar campos vacios',
            ErrorMessages::ERORR_SINGUP_INVALID_EMAIL       => 'El email ingresado no es valido',
            ErrorMessages::ERORR_SINGUP_DIFERENT_PASSWORD   => 'Ambas contraseñas deben ser iguales',
            ErrorMessages::ERORR_SINGUP_INVALIDT_PASSWORD   => 'La  contrasena debe tener entre 8 y 16 caracteres y contener almenos una mayuscula, una minuscula y un numero del 0 al 9',
            ErrorMessages::ERORR_SINGUP_EMPTY_ROLE          => 'Debes elegir al menos un rol',
            ErrorMessages::ERORR_SINGUP_EXISTS_USER         => 'El usuario ingresado ya existe en el sitema',
            ErrorMessages::ERORR_SINGUP_EXISTS_EMAIL        => 'El email ingresado ya existe en el sitema',
            ErrorMessages::ERORR_SINGUP_CREATE_USER         => 'Eror al crear el usuario',
            ErrorMessages::ERORR_SINGUP_CREATE_ROLE         => 'Eror al crear el role',

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
