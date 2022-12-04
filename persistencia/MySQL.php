<?php 
require_once 'ManejadorBaseDeDatosInterface.php'; 
class MySQL implements ManejadorBaseDeDatosInterface 
{ 
    const USUARIO = 'root'; 
    const CLAVE = ''; 
    const BASE = 'bd'; 
    const SERVIDOR = 'localhost'; 
    private $_conexion;

    public function conectar() { 
        $this->_conexion = mysqli_connect (
            self::SERVIDOR,
            self::USUARIO,
            self::CLAVE,
            self::BASE );
        $this->_conexion->set_charset("utf8"); #Para las tildes y caracteres especiales 
    }
    public function desconectar(){
        mysqli_close($this->_conexion);
    }
    public function traerDatos($sql){
        $retorno = null;
        if (!($resultado = $this->_conexion->query($sql)))
            $retorno = 'Error!! En la Sentencia SQL: '.$sql;
        else
            if (is_object($resultado)){ #Si devuelve un SELECT
                while ($row = mysqli_fetch_assoc($resultado)) 
                    $retorno[] = $row;
            } else # En caso de otra operación (INSERT/UPDATE/DELETE)
                $retorno='Operación realizada con éxito';
        return $retorno;
    }
}