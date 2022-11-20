<?php 
class SuccesserMessages{
    // ERROR_CONTROLLER_METHOD_ACTION
    const SUCCESS_ADMIN_TEST            = "test";
    const SUCCESS_SINGUP_USER_CREATED   = "singup001";
    const SUCCESS_ENROLL_ENROLL_CREATED = "enrollp001";
    const SUCCESS_DELETE_IMAGE          = "profilede001";
    const SUCCESS_UPDATE_USER           = "profileup001";

    private $successList = [];


    public function __construct()
    {
        $this->successList = [
            SuccesserMessages::SUCCESS_ADMIN_TEST => 'Mensaje de prueba exitoso!',
            SuccesserMessages::SUCCESS_SINGUP_USER_CREATED => 'Usuario creado exitosamente!',
            SuccesserMessages::SUCCESS_ENROLL_ENROLL_CREATED => 
            '<div class="alert alert-success m-1">
                Matricula existosa
            </div>

            <button class="btn btn-success m-4">
                <a class="text-decoration-none text-white fs-5" href="">
                    ver temas
                </a>
            </button>
            ',
            SuccesserMessages::SUCCESS_DELETE_IMAGE => 'Imagen Eliminada exitosamente!',
            SuccesserMessages::SUCCESS_UPDATE_USER => 'Datos actualizado exitosamente!',
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