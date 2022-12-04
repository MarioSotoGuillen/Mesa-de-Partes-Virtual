<?php
session_start();
require_once './persistencia/BaseDeDatos.php';
require_once './modelo/reclamos.php';
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
            'encabezado'=>'Nueva TRAMITE DE reclamos'
        );
        Html::mostrar('reclamos_1/frmNuevo.php',$datosHtml); 
    }
    static public function editar(){
        if (isset($_REQUEST['id'])) {
            $reclamos_1 = new Reclamos ($_REQUEST['id']);
            $mireclamos_1=$reclamos_1->leerUno();
            $datosHtml = array(
                'encabezado'=>'Editar reclamo: '.$_REQUEST['id'],
                'reclamos_1'=>$mireclamos_1 [0] # enviamos el primero
            );
            Html::mostrar('reclamos_1/frmEditar.php',$datosHtml);
        } else 
            echo "...El Id a EDITAR es requerido";
    }
    static public function eliminar(){
        if (isset($_REQUEST['id'])) {
            $reclamos_1 = new Reclamos ($_REQUEST['id']);
            $reclamos_1 ->eliminar();
            #Volvemos a mostrar los datos
            self::mostrar();
        } else 
            echo "...El Id a Eliminar es requerido";
    }
    static public function guardar($op){
        $reclamos_1 = new Reclamos (
                    $_POST['id'],
                    $_POST['nombre'],
                    $_POST['Apellidos'],
                    $_POST['CorreoElectronico'],
                    $_POST['Asunto'],
                    $_POST['Comentario']
                
                );
        switch ($op){
            case 'nuevo': 
                $reclamos_1->nuevo();
                break;
            case 'editar':
                $reclamos_1->editar();
                break;
        }
        #Volvemos a mostrar los datos
        self::mostrar();
    }
    static public function mostrar(){
        if($_SESSION['login']){
            $reclamos_1 = new Reclamos();
            $datosHtml = array(
                'encabezado'=>'REGISTROS DE RECLAMOS',
                'Reclamos'=>$reclamos_1->leer(),
                
                'opciones' => array(
                
                    'indexEstudiante.php'=>'  INGRESAR Estudiantes ',
               
                    'indexreclamo.php'=>' Reclamos ',
                   
                )
                
            );
            Html::mostrar('reclamos_1/mostrar2.php',$datosHtml);
        } else {
            session_destroy();
            $opciones = array(
                
                'indexEstudiante.php'=>'INGRESAR ESTUDIANTES',
                
               
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
    static public function logout(){
        session_destroy();
        $opciones = array(
            
            'indexEstudiante.php'=>'INGRESAR ESTUDIANTES',
            
           
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