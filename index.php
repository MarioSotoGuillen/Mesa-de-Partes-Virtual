<?php
session_start();
require_once "Html.php";
require_once './persistencia/BaseDeDatos.php';
require_once './modelo/login.php';

abstract class Index
{
    static public function run(){

        $accion = !empty($_REQUEST['accion'])?$_REQUEST['accion']:'mostrar';
        
        if($accion=='verificar'){
            self::verificar();
        }

       
        
        if($_SESSION['id_cargo']==="1"){
            $opciones = array(
           
                'indexEstudiante.php'=>' INGRESAR ESTUDIANTES ',
                'indexreclamo.php'=>' Reclamos ',
               
            ); }
         
            if($_SESSION['id_cargo']==="2"){
                $opciones = array(
               
                    'indexUsuarioExterno.php'=>'INGRESAR USUARIOS',
                    'indexreclamo.php'=>' Reclamos ',
                   
                );
        }else {
            $opciones = array(
           
        
                'indexUsuarioExterno.php'=>'INGRESAR USUARIOS',
                'indexreclamo.php'=>' Reclamos ',
              
               
            );
        }
        $datosHtml = array(
            'encabezado'=>'"EN PROCESO"',
            'encabezado2'=>'LUISITO EL PILLO',
            'opciones'=>$opciones
        );


        if (!isset($_SESSION['login'])) {
            Html::mostrar('login.php',$datosHtml);
          } else {
            Html::mostrar('principal_2.php',$datosHtml);
          };

        
    }

    static public function verificar(){

        $opciones = array(
            
            'indexEstudiante.php'=>'INGRESAR ESTUDIANTES',
            'indexUsuarioExterno.php'=>'INGRESAR USUARIOS',
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
            var_dump($response);
            
            if($response){
                //login
                
                $_SESSION['login'] = $response[0]['id'];
                $_SESSION['id_cargo'] = $response[0]['id_Cargo'];
                Html::mostrar('principal_2.php',$datosHtml);
            } else {
                //error
            }
            
        }
        
    }
    
    
}
Index::run();