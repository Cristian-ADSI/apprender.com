<?php

class SingupModel extends Model
{
    private $email;
    private $idUser;
    private $image;
    private $lastname;
    private $name;
    private $password;
    private $phone;


    function __construct()
    {
        parent::__construcut();
        $this->email = '';
        $this->idUser = '';
        $this->image = '';
        $this->lastname = '';
        $this->name = '';
        $this->password = '';
        $this->phone = '';
    }

    public function create()
    {
        $str="INSERT INTO `usuarios`(id_usuario, telefono, nombre, apellido, imagen, correo, clave) 
        VALUES (:id_usuario, :telefono, :nombre', :apellido, :imagen, :correo, :clave')";
        try {
           $query = $this->prepare($str);
           $query->execute([
            'id_usuario'=> $this->idUser,
            'telefono'  => $this->phone,
            'nombre'    => $this->name,
            'apellido'  => $this->lastname,
            'imagen'    => $this->image,
            'correo'    => $this->email,
            'clave'     => $this->password,
           ]);

           return true;

        } catch (PDOException $err) {

            error_log("SINGUPMODEL::CREATE=>PDOEXEPTION: $err");
           return false;
            
        }
    }

    private function hashPassword($PASSWORD){
        return password_hash($PASSWORD, PASSWORD_DEFAULT, ['cost'=> 10]);
    }
    

    public function getUser($ID_USER)
    {
        $str="SELECT * FROM `usuarios` WHERE id_usuario = :id_usuario";

        try {
           $query = $this->prepare($str);
           $query->execute([ 'id_usuario' => $ID_USER ]);

           $user = $query->fetch(PDO::FETCH_ASSOC);
            
           $this->setIdUser($user['id_usuario']);
           $this->setPhone($user['telefono']);
           $this->setName($user['nombre']);
           $this->setLastname($user['apellido']);
           $this->setImage($user['imagen']);
           $this->setEmail($user['correo']);
           $this->setPassword($user['clave']);

           return $this;

        } catch (PDOException $err) {

            error_log("SINGUPMODEL::CREATE=>PDOEXEPTION: $err");
           return false;
            
        }
        
    }

    public function comparePasswords($PASSWORD, $ID_USER){
        try {
            $user = $this->getUser($ID_USER);
            return password_verify($PASSWORD,$user['clave']);

        } catch (PDOException $err) {
            error_log("SINGUPMODEL::CREATE=>PDOEXEPTION: $err");
           return false;     
        }
    }

    public function setEmail($EMAIL){      $this->email = $EMAIL; }
    public function setIdUser($ID_USER){   $this->idUser = $ID_USER; }
    public function setImage($IMAGE){      $this->image = $IMAGE; }
    public function setPhone($PHONE){      $this->phone = $PHONE; }
    public function setLastname($LASTNAME){$this->lastname = $LASTNAME; }
    public function setName($NAME){        $this->name = $NAME; }
    public function setPassword($PASSWORD){$this->password =  $this->hashPassword($PASSWORD);}

    public function getEmail(){     return $this->email; }
    public function getIdUser(){    return $this->idUser; }
    public function getImage(){     return $this->image; }
    public function getPhone(){     return $this->phone; }
    public function getLastname(){  return $this->lastname; }
    public function getName(){      return $this->name; }
    public function getPassword(){  return $this->password;}
}
