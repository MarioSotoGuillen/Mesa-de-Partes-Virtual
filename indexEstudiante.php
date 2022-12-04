<?php
session_start();

//exit();
require_once './persistencia/BaseDeDatos.php';
require_once './modelo/estudiante_1.php';
require_once './Html.php';
abstract class Index
{
    static public function run(){
        $accion = ! empty($_REQUEST['accion'])?$_REQUEST['accion']:'mostrar';
      
        if(!isset($_SESSION['login'])){
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
            return;
        }
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
                case 'verificar':
                        self::verificar();
                        break;
            default:
                self::mostrar();
        }
       
    }
    static public function nuevo(){
        $datosHtml = array(
            'encabezado'=>'Nuevo TRAMITE DE Estudiante '
        );
        Html::mostrar('estudiante_1/frmNuevo.php',$datosHtml); 
    }
    static public function editar(){
        if (isset($_REQUEST['id'])) {
            $estudiante_1= new Estudiante ($_REQUEST['id']);
            $miestudiante_1=$estudiante_1->leerUno();
            $datosHtml = array(
                'encabezado'=>'Editar Datos Estudiante: '.$_REQUEST['id'],
                'estudiante_1'=>$miestudiante_1[0] # enviamos el primero
            );
            Html::mostrar('estudiante_1/frmEditar.php',$datosHtml);
        } else 
            echo "...El Id a EDITAR es requerido";
    }
    static public function eliminar(){
        if (isset($_REQUEST['id'])) {
            $estudiante_1 = new Estudiante ($_REQUEST['id']);
            $estudiante_1->eliminar();
            #Volvemos a mostrar los datos
            self::mostrar();
        } else  
            echo "...El Id a Eliminar es requerido";
    }
    static public function guardar($op){
        var_dump($_POST);
        
        $estudiante_1 = new Estudiante (
                    $_POST['id'],
                    $_POST['nombre'],
                    $_POST['Apellidos'],
                    $_POST['Dni'],
                    $_POST['Telefono'],
                    $_POST['Correo'],
                    $_POST['Semestre'],
                    $_POST['NumFolios'],
                    $_POST['Asunto'],
                    $_POST['destinatario'],
                );
        switch ($op){
            case 'nuevo': 
                $estudiante_1->nuevo();
                break;
            case 'editar':
                $estudiante_1->editar();
                break;
        }
        #Volvemos a mostrar los datos
        self::mostrar();
    }
    static public function mostrar(){

        
        $estudiante_1 = new Estudiante();
        if($_SESSION['id_cargo']==="1"){
            //administrador
            $opciones = array(
            
                'indexEstudiante.php'=>' INGRESAR Estudiantes ',

                'indexreclamo.php'=>' Reclamos ',
               
            );
        } else{
            //estudiante
            $opciones = array(
            
                'indexEstudiante.php'=>' INGRESAR Estudiantes ',
                'indexreclamo.php'=>' Reclamos ',
               
            );
        }
        $datosHtml = array(
            'encabezado'=>'REGISTROS DE DOCUMENTOS',
            'estudiante_1'=>$estudiante_1->leer(),
            'opciones' => $opciones
        );
        Html::mostrar('estudiante_1/mostrar.php',$datosHtml);
       

        
    }

    static public function verificar(){

        $opciones = array(
            
            'indexEstudiante.php'=>'INGRESAR ESTUDIANTES',

            'indexreclamo.php'=>' Reclamos ',
           
        );
        $datosHtml = array(
            'encabezado'=>'BIENVENIDSOS"',
            'encabezado2'=>'LUISITO EL PILLO',

            
            'opciones'=>$opciones
        );

        if (isset($_POST)) {
            $login = new Login(
                '',
                '',
                $_POST['email'],
                $_POST['password']);
            $response = $login->login();
        
            if($response){
                //login
                
                $_SESSION['login'] = $response['id'];
                $_SESSION['id_cargo'] = $response['id_cargo'];
                Html::mostrar('principal_2.php',$datosHtml);
            } else {
                //error
            }
            
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