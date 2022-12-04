<?php
require_once "Html.php";
require_once './persistencia/BaseDeDatos.php';
require_once './modelo/login.php';
    session_destroy();
    header("Location:".Index::verificar()."index.php");
    exit();
?>