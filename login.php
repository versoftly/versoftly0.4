<?php session_start();

    require_once "./core/configuraciones.php";

    $errores = '';

    if (isset($_SESSION['user'])) {
        
        header ("Location: privado.php");
        
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        $user = filter_var(strtolower($_POST['usuario']),FILTER_SANITIZE_STRING);
        $pass = hash('sha512',$_POST['password']);
        
        $servername = "localhost";
        $username = "root";
        $password = "versoftly";
        $database = "mosteigd_login_signup";
        
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
        } catch(PDOException $e) {
            echo "error ".$e->getMessage();
        }
        
        $statement = $conn->prepare("SELECT * FROM login_signup WHERE user = :user AND password = :password");
        
        $statement->execute([
            ":user" => $user,
            ":password" => $pass
        ]);
        
        $result = $statement->fetch();
        
        if ($result !== false) {
            
            $_SESSION['user'] = $user;
            header("Location: privado.php");
            
        } else {
            
            $errores .= '<li>Datos Incorrectos.</li>';
            
        }
        
    }

    require_once "./core/vistas/login.php";
   
?>