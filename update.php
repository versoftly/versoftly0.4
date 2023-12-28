<?php session_start ();

    if (!isset($_SESSION['usuario'])) {
        header("Location: login.php");
    }

    require_once ("./core/configuraciones.php");

    require_once ("./core/vistas/update.php");
   
?>