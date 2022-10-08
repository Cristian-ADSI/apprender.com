<?php

class UserModel extends Model
{
    private $idUser;
    private $name;
    private $lastname;
    private $email;
    private $phone;
    private $password;
    private $image;
    private $roles;


    public function __construct()
    {
        parent::__construcut();
        $this->idUser = '';
        $this->name = '';
        $this->lastname = '';
        $this->phone = '';
        $this->email = '';
        $this->password = '';
        $this->image = '';
        $this->roles = [];



        error_log('SINGUP_MODEL::CONSTRUCT=>Loaded');
    }

    public function update()
    {
        $string = "UPDATE `usuarios` SET 
        `nombre`      = :nombre,
        `apellido`    = :apellido,
        `telefono`    = :telefono,
        `correo`      = :correo, 
        `clave`       = :clave
        `imagen`      = :imagen, 
        WHERE `id_usuario`  = :id_usuario";
        try {
            $query = $this->prepare($string);
            $query->execute([
                'nombre'     => $this->name,
                'apellido'   => $this->lastname,
                'telefono'   => $this->phone,
                'correo'     => $this->email,
                'clave'      => $this->password,
                'imagen'     => $this->image,
                'id_usuario' => $this->idUser,
            ]);

            return true;
        } catch (PDOException $err) {
            error_log("USER_MODEL::UPDATE=>PDOEXEPTION: $err");
            return false;
        }
    }

    public function create()
    {
        $string = "INSERT INTO `usuarios`
        (id_usuario, nombre, apellido, telefono, correo, clave, imagen) 
        VALUES (:id_usuario,:nombre, :apellido, :telefono, :correo, :clave, :imagen)";
        try {
            $query = $this->prepare($string);
            $query->execute([
                'id_usuario' => $this->idUser,
                'nombre'    => $this->name,
                'apellido'  => $this->lastname,
                'telefono'  => $this->phone,
                'correo'    => $this->email,
                'clave'     => $this->password,
                'imagen'    => $this->image,
            ]);

            return true;
        } catch (PDOException $err) {
            error_log("USER_MODEL::CREATE=>PDOEXEPTION: $err");
            return false;
        }
    }

    public function createRoles()
    {
        $string = "INSERT INTO `roles_usuario`(`id_usuario`, `cod_rol`) VALUES (:id_usuario,:cod_role)";

        try {
            foreach ($this->roles as $role) {
                $query = $this->prepare($string);
                $query->execute([
                    'id_usuario' => $this->idUser,
                    'cod_role'    => $role,
                ]);
            }

            return true;
        } catch (PDOException $err) {
            error_log("USER_MODEL::CREATE=>PDOEXEPTION: $err");
            return false;
        }
    }

    public function getUser($ID_USER)
    {
        $string = "SELECT `usuarios`.*, `nombre` ,`cod_rol` FROM `roles_usuario`
        INNER JOIN usuarios ON `roles_usuario`.id_usuario = `usuarios`.`id_usuario`
        WHERE `usuarios`.id_usuario  = :id_usuario";

        try {
            $query = $this->prepare($string);
            $query->execute(['id_usuario' => $ID_USER]);

            $user = $query->fetch(PDO::FETCH_ASSOC);

            if (!$user) {
                return false;
            }

            $this->setIdUser($user['id_usuario']);
            $this->setName($user['nombre']);
            $this->setLastname($user['apellido']);
            $this->setPhone($user['telefono']);
            $this->setEmail($user['correo']);
            $this->setPassword($user['clave']);
            $this->setImage($user['imagen']);
            $this->setRoles($user['cod_rol']);

            return $this;
        } catch (PDOException $err) {

            error_log("USER_MODEL::GET_USER=>PDOEXEPTION: $err");
            return false;
        }
    }

    public function comparePasswords($PASSWORD)
    {
        $hash = $this->getPaswwordHash($this->getIdUser());
        return password_verify($PASSWORD, $hash);
    }

    public function exists($FIELD, $VALUE)
    {
        $string = "SELECT `$FIELD` FROM `usuarios` WHERE `$FIELD` = :value";
        try {
            $query = $this->prepare($string);
            $query->execute(['value' => $VALUE]);

            if ($query->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $err) {

            error_log("USER_MODEL::GET_USER=>PDOEXEPTION: $err");
            return false;
        }
    }

    private function getPaswwordHash($ID_USER)
    {
        $string = "SELECT `clave` FROM `usuarios` WHERE `id_usuario` = :id_usuario";
        try {
            $query = $this->prepare($string);
            $query->execute(['id_usuario' => $ID_USER]);
            $user = $query->fetch(PDO::FETCH_ASSOC);
            return $user['clave'];
        } catch (PDOException $err) {

            error_log("USER_MODEL::GET_USER=>PDOEXEPTION: $err");
            return false;
        }
    }

    private function hashPassword($PASSWORD)
    {
        return password_hash($PASSWORD, PASSWORD_DEFAULT);
    }

    public function setModel($ARRAY)
    {
        $this->idUser   = $ARRAY['idUser'];
        $this->name     = $ARRAY['name'];
        $this->lastname = $ARRAY['lastname'];
        $this->phone    = $ARRAY['phone'];
        $this->email    = $ARRAY['email'];
        $this->password = $ARRAY['password'];
        $this->image    = $ARRAY['image'];
    }
    public function startSession()
    {
        session_start();
        $session = new Session($this->getIdUser(), $this->getRoles(), $this->getName());
    }

    // Setters 
    public function setEmail($EMAIL)
    {
        $this->email = $EMAIL;
    }
    public function setIdUser($ID_USER)
    {
        $this->idUser = $ID_USER;
    }
    public function setImage($IMAGE)
    {
        $this->image = $IMAGE;
    }
    public function setPhone($PHONE)
    {
        $this->phone = $PHONE;
    }
    public function setLastname($LASTNAME)
    {
        $this->lastname = $LASTNAME;
    }
    public function setName($NAME)
    {
        $this->name = $NAME;
    }
    public function setPassword($PASSWORD)
    {
        $this->password =  $this->hashPassword($PASSWORD);
    }
    public function setRoles($ROLES)
    {
        $this->roles =  $ROLES;
    }
    // Getters 
    public function getEmail()
    {
        return $this->email;
    }
    public function getIdUser()
    {
        return $this->idUser;
    }
    public function getImage()
    {
        return $this->image;
    }
    public function getPhone()
    {
        return $this->phone;
    }
    public function getLastname()
    {
        return $this->lastname;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function getRoles()
    {
        return $this->roles;
    }
}
