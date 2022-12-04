<?php
session_start();
require_once './persistencia/BaseDeDatos.php';
require_once './modelo/usuarioExterno.php';
require_once './Html.php';
abstract class Index
{
    static public function run(){
        $accion = ! empty($_REQUEST['accion'])?$_REQUEST['accion']:'mostrar';
        switch ($accion){
            case 'nuevo':
                self::nuevo();
                break;
            case 'editar':
                self::editar();
                break;
            case 'guardarNuevo':
                self::guardar('nuevo');
                break;
            case 'guardarEditar':
                self::guardar('editar');
                break;
            case 'eliminar':
                self::eliminar();
                break;
             case 'logout':
                    self::logout();
                    break;
            default:
                self::mostrar();
        }
    }
    static public function nuevo(){
        $datosHtml = array(
            'encabezado'=>'Nueva TRAMITE  de Persona EXTERNA'
        );
        Html::mostrar('usuarioExterno/frmNuevo.php',$datosHtml); 
    }
    static public function editar(){
        if (isset($_REQUEST['id'])) {
            $usuarioExterno = new UsuarioExterno ($_REQUEST['id']);
            $miusuarioExterno=$usuarioExterno->leerUno();
            $datosHtml = array(
                'encabezado'=>'Editar Datos del Estudiante: '.$_REQUEST['id'],
                'usuarioExterno'=>$miusuarioExterno[0] # enviamos el primero
            );
            Html::mostrar('usuarioExterno/frmEditar.php',$datosHtml);
        } else 
            echo "...El Id a EDITAR es requerido";
    }
    static public function eliminar(){
        if (isset($_REQUEST['id'])) {
            $usuarioExterno = new UsuarioExterno ($_REQUEST['id']);
            $usuarioExterno->eliminar();
            #Volvemos a mostrar los datos
            self::mostrar();
        } else 
            echo "...El Id a Eliminar es requerido";
    }
    static public function guardar($op){
        $usuarioExterno = new UsuarioExterno (
                    $_POST['id'],
                    $_POST['nombre'],
                    $_POST['ApellidoPaterno'],
                    $_POST['ApellidoMaterno'],
                    $_POST['Direccion'],
                    $_POST['Departamento'],
                    $_POST['Provincia'],
                    $_POST['Distrito'],
                    $_POST['Celular'],
                    $_POST['CorreoElectronico'],
                    $_POST['CarreraProfesional']
                );
        switch ($op){
            case 'nuevo': 
                $usuarioExterno->nuevo();
                break;
            case 'editar':
                $usuarioExterno->editar();
                break;
        }
        #Volvemos a mostrar los datos
        self::mostrar();
    }
    static public function mostrar(){
        $usuarioExterno = new UsuarioExterno();
        $datosHtml = array(
            'encabezado'=>'REGISTROS DE DOCUMENTOS',
            'usuarioExterno'=>$usuarioExterno->leer(),
            'opciones' => array(
            
            
                'indexUsuarioExterno.php'=>' INGRESAR USUARIOS EXTERNOS',
                'indexreclamo.php'=>' Reclamos ',
               
            )
        );
        Html::mostrar('usuarioExterno/mostrar.php',$datosHtml);
    }

    static public function logout(){
        session_destroy();
        $opciones = array(
            
            'indexUsuarioExterno.php'=>'INGRESAR ESTUDIANTES',
            
           
        );
        $datosHtml = array(
            'encabezado'=>'BIENVENIDOS"',
            'encabezado2'=>'LUISITO EL PILLO',

            
            'opciones'=>$opciones
        );
        # Html::mostrar('principal_2.php',$datosHtml);
        Html::mostrar('login.php',$datosHtml);
    }
}

Index::run();