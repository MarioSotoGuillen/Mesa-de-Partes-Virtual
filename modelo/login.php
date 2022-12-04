<?php
class Login {
    private $_id;
    private $_name;
    private $_email;
    private $_password;
    private $_tabla="users";
    private $_bd;

    public function __construct($id=null, $nombre=null,$email=null,$password=null){
      $this->_bd = new BaseDeDatos(new MySQL());
      $this->_id = $id;
      $this->_name= $nombre;
      $this->_email= $email;
      $this->_password=$password;
    }
    public function leer(){
        $sql ="SELECT * FROM ". $this->_tabla .";";
        return $this->_bd->ejecutar($sql);
    }
     public function leerUno(){
        $sql= "SELECT * FROM ". $this->_tabla 
            . " WHERE id=".$this->_id;
        return $this->_bd->ejecutar($sql);    
    }
    public function eliminar(){
        $sql= "Delete FROM ". $this->_tabla 
            . " WHERE id=".$this->_id;
        return $this->_bd->ejecutar($sql);    
    }
    public function editar(){
        $sql ="UPDATE `users` SET `name`='".$this->_name."',`Apellidos`='".$this->_Apellidos."',`Dni`='".$this->_Dni."',`Telefono`='".$this->_Telefono."',`Correo`='".$this->_Correo."',`Semestre`='".$this->_Semestre."',`NumFolios`='".$this->_NumFolios."',`Asunto`='".$this->_Asunto."' WHERE id=".$this->_id."";
        return $this->_bd->ejecutar($sql);
    }
    public function login(){
      $sql = "SELECT * FROM users WHERE `email`='".$this->_email."' and `password`='".$this->_password."'";
      $response = $this->_bd->ejecutar($sql);
      
      return $response;
      
    }
    public function nuevo(){
        $sql = "INSERT INTO ". $this->_tabla 
        ."(name,email,password,) VALUES ('".
        $this->_name."','". 
        $this->_email."','".
        $this->_password."')";
      

        return $this->_bd->ejecutar($sql);
    }
}



