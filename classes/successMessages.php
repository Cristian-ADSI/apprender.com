<?php 
class SuccesserMessages{
    // ERROR_CONTROLLER_METHOD_ACTION
    const SUCCESS_ADMIN_TEST = "test";
    const SUCCESS_SINGUP_USER_CREATED = "singup001";

    private $successList = [];


    public function __construct()
    {
        $this->successList = [
            SuccesserMessages::SUCCESS_ADMIN_TEST => 'Mensaje de prueba exitoso!',
            SuccesserMessages::SUCCESS_SINGUP_USER_CREATED => 'Usuario creado exitosamente!'
        ];
    }

    public function getSuccess($CODE)
    {
        return $this->successList[$CODE];
    }

    public function existsKey($CODE)
    {
        if (array_key_exists($CODE, $this->successList)) {
            return true;
        } else {
            return false;
        }
    }
}