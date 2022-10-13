<?php

class EnrollmentModel extends Model
{

    private $idCourse;
    private $idUser;
    private $enrollmentDate;


    public function __construct()
    {
        // error_log('ENROLLMENT_MODEL::CONSTRUCT=>Loaded');
        parent::__construcut();

        $this->idCourse = '';
        $this->idUser = '';
        $this->t = '';
    }


    public function create()
    {
        $string = "INSERT INTO `matriculas`(`id_curso`, `id_usuario`, `fecha` )VALUES(:id_curso, :id_usuario, :fecha)";

        try {
            $query = $this->prepare($string);

            $query->execute([
                'id_curso'  => $this->idCourse,
                'id_usuario'=> $this->idUser,
                'fecha'     => $this->enrollmentDate,
            ]);

            return true;
        } catch (PDOException $err) {
            error_log("USER_MODEL::CREATE=>PDOEXEPTION: $err");
            return false;
        }
    }

    public function setModel($ARRAY)
    {
        $this->idCourse     =   $ARRAY['idCourse'];
        $this->idUser       =   $ARRAY['idUser'];
        $this->enrollmentDate = $ARRAY['erollmentDate'];
    }

    public function getModel()
    {
        $arrayEnrolmentt = [
            'idCourse'      => $this->idCourse,
            'idUser'        => $this->idUser,
            'enrollmentDate'  => $this->enrollmentDate,
        ];

        return $arrayEnrolmentt;
    }

    // Getters 
    public function getIdCourse()
    {
        return $this->idCourse;
    }
    public function getIdUser()
    {
        return $this->idUser;
    }
    public function getEnrollmentDate()
    {
        return $this->enrollmentDate;
    }


    // Setters 
    public function setIdCourse($ID_COURSE)
    {
        $this->idCourse = $ID_COURSE;
    }
    public function setIdUser($ID_USER)
    {
        $this->idUser = $ID_USER;
    }
    public function setDate($ENROLLMENT_DATE)
    {
        $this->enrollmentDate = $ENROLLMENT_DATE;
    }
}
