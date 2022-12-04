<?php
class UsuarioExterno {
    private $_id;
    private $_nombre;
    private $_ApellidoPaterno;
    private $_ApellidoMaterno;
    private $_Direccion;
    private $_Departamento;
    private $_Provincia;
    private $_Distrito;
    private $_Celular;
    private $_CorreoElectronico;
    private $_CarreraProfesional;
    private $_tabla="dat_persogeneral";
    private $_bd;

    public function __construct($id=null, $nombre=null,$ApellidoPaterno=null,$ApellidoMaterno=null,$Direccion=null,$Departamento=null,$Provincia=null,$Distrito=null,$Celular=null,$CorreoElectronico=null,$CarreraProfesional=null){
        $this->_bd = new BaseDeDatos(new MySQL());
        $this->_id = $id;
        $this->_nombre= $nombre;
        $this->_ApellidoPaterno=$ApellidoPaterno;
        $this->_ApellidoMaterno=$ApellidoMaterno;
        $this->_Direccion=$Direccion;
        $this->_Departamento=$Departamento;
        $this->_Provincia=$Provincia;
        $this->_Distrito=$Distrito;
        $this->_Celular=$Celular;
        $this->_CorreoElectronico=$CorreoElectronico;
        $this->_CarreraProfesional=$CarreraProfesional;
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
        $sql ="UPDATE ". $this->_tabla 
            . " SET nombre='".$this->_nombre."',"
            . " ApellidoPaterno='".$this->_ApellidoPaterno."',"
            . " ApellidoMaterno='".$this->_ApellidoMaterno."',"
            . " Direccion='".$this->_Direccion."',"
            . " Departamento='".$this->_Departamento."',"
            . " Provincia='".$this->_Provincia."',"
            . " Distrito='".$this->_Distrito."',"
            . " Celular='".$this->_Celular."',"
            . " CorreoElectronico='".$this->_CorreoElectronico."',"
            . " CarreraProfesional='".$this->_CarreraProfesional."'"
            ." WHERE id=".$this->_id;
        return $this->_bd->ejecutar($sql);
    }

    public function nuevo(){
        $sql = "INSERT INTO ". $this->_tabla 
        ." (nombre,ApellidoPaterno,ApellidoMaterno,Direccion,Departamento,Provincia,Distrito,Celular,CorreoElectronico,CarreraProfesional) VALUES ('".
            $this->_nombre ."','". 
            $this->_ApellidoPaterno."','".
            $this->_ApellidoMaterno."','".
            $this->_Direccion."','".
            $this->_Departamento."','".
            $this->_Provincia."','".
            $this->_Distrito."','".
            $this->_Celular."','".
            $this->_CorreoElectronico."','".
            $this->_CarreraProfesional."')";
        return $this->_bd->ejecutar($sql);
    }
}
