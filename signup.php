<?php session_start();

    if (isset($_SESSION['usuario'])) {
        header("Location: index.php");
    }
    
    require_once "./core/Interruptor.php";

    interruptor (1,"./core/configuraciones.php");

    interruptor (1,"./core/db/DbConect.php");

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $usuario = DbConect::valUser($_POST['usuario']);
        $password = $_POST['password'];
        $repassword = $_POST['repassword'];
        
        if (empty($usuario) or empty($password) or empty(repassword)) {
            $errors = "Ingresa la Informacion requerida porfavor.";
        } else {

            $conexion = new DbConect ([
                "servername" => "localhost",
                "username" => "root",
                "password" => "versoftly",
                "database" => "mosteigd_login_signup"
            ]);

        }
    }

    require_once("./core/vistas/signup.php");
   
?>