<?php session_start ();

    if (!isset($_SESSION['usuario'])) {
        header("Location: login.php");
    }
    
    require_once "./core/Interruptor.php";

    interruptor (1,"./core/configuraciones.php");

    interruptor (1,"./core/db/DbConect.php");

    $conexion = new DbConect ([
        "servername" => "localhost",
        "username" => "root",
        "password" => "versoftly",
        "database" => "mosteigd_versoftlyfps"
    ]);

    interruptor (1,"./core/vistas/update.php");
   
?>