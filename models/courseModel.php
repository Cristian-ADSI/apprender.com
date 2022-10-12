<?php

class CourseModel extends Model
{

    private $idCourse;
    private $image;
    private $name;
    private $description;
    private $startDate;
    private $endDate;
    private $value;
    private $teacher;

    public function __construct()
    {
        // error_log('SINGUP_MODEL::CONSTRUCT=>Loaded');
        parent::__construcut();

        $this->idCourse = '';
        $this->image = '';
        $this->name = '';
        $this->description = '';
        $this->startDate = '';
        $this->endDate = '';
        $this->value = '';
        $this->teacher = '';
    }

    public function getCourses()
    {
        $string = "SELECT * FROM `cursos` ORDER BY id_curso";
        $courses = [];

        try {
            $query = $this->prepare($string);
            $query = $this->query($string);

            while ($result = $query->fetch(PDO::FETCH_ASSOC)) {

                $this->setModel($result);
                $course = $this->getModel();
                array_push($courses, $course);
            }

            return $courses;
        } catch (PDOException $err) {

            error_log("USER_MODEL::GET_USER=>PDOEXEPTION: $err");
            return false;
        }
    }

    private function setModel($ARRAY)
    {
        $this->idCourse     = $ARRAY['id_curso'];
        $this->image        = $ARRAY['imagen'];
        $this->name         = $ARRAY['nombre'];
        $this->description  = $ARRAY['descripcion'];
        $this->startDate    = $ARRAY['fecha_inicial'];
        $this->endDate      = $ARRAY['fecha_final'];
        $this->value        = $ARRAY['valor'];
        $this->teacher      = $ARRAY['profesor'];
    }
    private function getModel()
    {
        $arrayCourse = [
            'idCourse'      => $this->idCourse,
            'image'         => $this->image,
            'name'          => $this->name,
            'description'   => $this->description,
            'startDate'     => $this->startDate,
            'endDate'       => $this->endDate,
            'value'         => $this->value,
            'teacher'       => $this->teacher
        ];

        return $arrayCourse;
    }


    // Getters 
    public function getIdCourse()
    {
        return $this->idCourse;
    }
    public function getImage()
    {
        return $this->image;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function getStarDate()
    {
        return $this->startDate;
    }
    public function getEndDate()
    {
        return $this->endDate;
    }
    public function getValue()
    {
        return $this->value;
    }
    public function getTeacher()
    {
        return $this->teacher;
    }

    // Setters 
    public function setIdCourse($ID_COURSE)
    {
        $this->idCourse = $ID_COURSE;
    }
    public function setImage($IMAGE)
    {
        $this->image = $IMAGE;
    }
    public function setName($NAME)
    {
        $this->name = $NAME;
    }
    public function setDescription($DESCRIPTION)
    {
        $this->description = $DESCRIPTION;
    }
    public function setStarDate($START_DATE)
    {
        $this->startDate = $START_DATE;
    }
    public function setEndDate($END_DATE)
    {
        $this->endDate = $END_DATE;
    }
    public function setValue($VALUE)
    {
        $this->value = $VALUE;
    }
    public function setTeacher($TEACHER)
    {
        $this->teacher = $TEACHER;
    }
}
