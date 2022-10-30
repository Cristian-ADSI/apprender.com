
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
    private $active;
    private $teacher;

    public function __construct()
    {
        // error_log('COURSE_MODEL::CONSTRUCT=>Loaded');
        parent::__construcut();

        $this->idCourse = '';
        $this->name = '';
        $this->image = '';
        $this->description = '';
        $this->startDate = '';
        $this->endDate = '';
        $this->value = '';
        $this->private = 0;
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

    public function getCoursesByUser($ID_USER)
    {
        $string = "SELECT `cursos`.* FROM `cursos`
        INNER join `matriculas` ON `cursos`.`id_curso` = `matriculas`.`id_curso`
        WHERE `matriculas`.`id_usuario` = $ID_USER ";

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

    public function getCoursesByTeacher($ID_Teacher)
    {
        $string = "SELECT * FROM `cursos` WHERE `profesor` = '$ID_Teacher' 
        AND `activo` = 1  ORDER BY `id_curso`";

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

    public function getThemes($ID_COURSE)
    {
        $string = "SELECT T.id_tema, T.nombre FROM cursos C
        INNER JOIN cursos_tema CT ON CT.id_curso = C.id_curso
        INNER JOIN temas T ON T.id_tema = CT.id_tema
        WHERE C.id_curso = '$ID_COURSE' ";

        $themes = [];

        try {
            $query = $this->prepare($string);
            $query = $this->query($string);

            while ($result = $query->fetch(PDO::FETCH_ASSOC)) {
                array_push($themes, $result);
            }

            return $themes;
        } catch (PDOException $err) {

            error_log("USER_MODEL::GET_THEMES=>PDOEXEPTION: $err");
            return false;
        }
    }

    public function getThemsAndThematics($THEMES)
    {
        $themesAndThematics = [];

        try {

            foreach ($THEMES as $theme) {
                $string = "SELECT `tematicas`.nombre, `tematicas`.`descripcion`, `tematicas`.`video` FROM `temas`
                INNER JOIN `temas_tematicas` ON `temas`.`id_tema` = `temas_tematicas`.`id_tema`
                INNER JOIN `tematicas` ON `temas_tematicas`.`id_tematica` = `tematicas`.`id_tematica`
                WHERE `temas_tematicas`.`id_tema` = " . $theme['id_tema'];
                $query = $this->prepare($string);
                $query = $this->query($string);
                $thematics = [];

                while ($result = $query->fetch(PDO::FETCH_ASSOC)) {
                    array_push($thematics, $result);
                }

                $theme['thematics'] = $thematics ? $thematics : [];

                array_push($themesAndThematics, $theme);
            }

            return $themesAndThematics;
        } catch (PDOException $err) {

            error_log("USER_MODEL::GET_THEMES=>PDOEXEPTION: $err");
            return false;
        }
    }

    public function setModel($ARRAY)
    {
        $this->idCourse     = $ARRAY['id_curso'];
        $this->image        = $ARRAY['imagen'];
        $this->name         = $ARRAY['nombre'];
        $this->description  = $ARRAY['descripcion'];
        $this->startDate    = $ARRAY['fecha_inicial'];
        $this->endDate      = $ARRAY['fecha_final'];
        $this->value        = $ARRAY['valor'];
        $this->teacher      = $ARRAY['profesor'];
        $this->active       = $ARRAY['activo'];
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
            'teacher'       => $this->teacher,
            'active'         => $this->active
        ];

        return $arrayCourse;
    }

    public function createCourse($POST)
    {
        $this->setModel($POST);
        $string = "INSERT INTO `cursos`
        (nombre, imagen, descripcion, fecha_inicial, fecha_final, valor, profesor, activo) 
        VALUES (:nombre, :imagen, :descripcion, :fecha_inicial, :fecha_final, :valor, :profesor, :activo)";
        try {
            $query = $this->prepare($string);
            $query->execute([
                'nombre'        => $this->name,
                'imagen'        => $this->image,
                'descripcion'   => $this->description,
                'fecha_inicial' => $this->startDate,
                'fecha_final'   => $this->endDate,
                'valor'         => $this->value,
                'profesor'      => $this->teacher,
                'activo'        => $this->active,
            ]);

            return true;
        } catch (PDOException $err) {
            error_log("USER_MODEL::CREATE=>PDOEXEPTION: $err");
            return false;
        }
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
