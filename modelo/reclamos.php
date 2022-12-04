<?php
class Reclamos {
    private $_id;
    private $_nombre;
    private $_Apellidos;
    private $_CorreoElectronico;
    private $_Asunto;
    private $_Comentario;
    private $_tabla="datos";
    private $_bd;

    public function __construct($id=null, $nombre=null,$Apellidos=null,$CorreoElectronico=null,$Asunto=null,$Comentario=null){
        $this->_bd = new BaseDeDatos(new MySQL());
        $this->_id = $id;
        $this->_nombre= $nombre;
        $this->_Apellidos= $Apellidos;
        $this->_CorreoElectronico=$CorreoElectronico;
        $this->_Asunto=$Asunto;
        $this->_Comentario=$Comentario;
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
            . " Apellidos='".$this->_Apellidos."',"
            . " CorreoElectronico='".$this->_CorreoElectronico."',"
            . " Asunto='".$this->_Asunto."',"
            . " Comentario='".$this->_Comentario."'"
            ." WHERE id=".$this->_id;
        return $this->_bd->ejecutar($sql);
    }

    public function nuevo(){
        $sql = "INSERT INTO ". $this->_tabla 
        ." (nombre,Apellidos,CorreoElectronico,Asunto,Comentario) VALUES ('".
            $this->_nombre ."','". 
            $this->_Apellidos."','".
            $this->_CorreoElectronico."','".
            $this->_Asunto."','".
            $this->_Comentario."')";
        return $this->_bd->ejecutar($sql);
    }
}
