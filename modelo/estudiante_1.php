<?php
class Estudiante {
    private $_id;
    private $_nombre;
    private $_Apellidos;
    private $_Dni;
    private $_Telefono;
    private $_Correo;
    private $_Semestre;
    private $_NumFolios;
    private $_Asunto;
    private $_destinatario;

    private $_tabla="dat_estudiante";
    private $_bd;

    public function __construct($id=null, 
    $nombre=null,
    $Apellidos=null,
    $Dni=null,
    $Telefono=null,
    $Correo=null,
    $Semestre=null,
    $NumFolios=null,
    $Asunto=null,
    $destinatario=null) {
        $this->_bd = new BaseDeDatos(new MySQL());
        $this->_id = $id;
        $this->_nombre= $nombre;
        $this->_Apellidos= $Apellidos;
        $this->_Dni= $Dni;
        $this->_Telefono= $Telefono;
        $this->_Correo= $Correo;
        $this->_Semestre= $Semestre;
        $this->_NumFolios= $NumFolios;
        $this->_Asunto= $Asunto;
        $this->_destinatario=$destinatario;
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
        $sql ="UPDATE `dat_estudiante` SET `nombre`='".$this->_nombre."',
        `Apellidos`='".$this->_Apellidos."',
        `Dni`='".$this->_Dni."',
        `Telefono`='".$this->_Telefono."',
        `Correo`='".$this->_Correo."',
        `Semestre`='".$this->_Semestre."',
        `NumFolios`='".$this->_NumFolios."',
        `Asunto`='".$this->_Asunto."',
        `destinatario`='".$this->_destinatario."' WHERE id=".$this->_id."";
        return $this->_bd->ejecutar($sql);
    }
    public function nuevo(){
        $sql = "INSERT INTO ". $this->_tabla 
        ."(nombre,Apellidos,Dni,Telefono,Correo,Semestre,NumFolios,Asunto,destinatario) VALUES ('".
        $this->_nombre."','". 
        $this->_Apellidos."','".
        $this->_Dni."','".
        $this->_Telefono."','".
        $this->_Correo."','".
        $this->_Semestre."','".
        $this->_NumFolios."','".
        $this->_Asunto."','".
        $this->_destinatario."')";

        return $this->_bd->ejecutar($sql);
    }
}



