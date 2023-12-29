<?php session_start();

require_once "./core/configuracionesLogin.php";

if (isset($_SESSION['user'])) {
    header("Location: privado.php");
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = filter_var(strtolower($_POST['usuario']),FILTER_SANITIZE_STRING);
    $pass = $_POST['password'];
    $rpass = $_POST['repassword'];
    
    $errores = '';
    
    if (empty($user) || empty($pass) || empty($rpass)) {
        $errores = "<li>Hay campos vacios</li>";
    } else {

        try {
          $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
        } catch(PDOException $e) {
            echo "error ".$e->getMessage();
        }
        
        $statement = $conn->prepare("SELECT * FROM login_signup WHERE user = :user LIMIT 1");
        $statement->execute([':user'=>$user]);
        $result = $statement->fetch();
        
        if ($result != false) {
            $errores .= "<li>el user ya existe.</li>";
        }
        
        $pass = hash('sha512',$pass);
        $rpass = hash('sha512',$rpass);
        
    }
    
    if ($errores == '') {
        $statement = $conn->prepare("INSERT INTO login_signup (user,password) VALUES (:user,:pass)");
        $statement->execute([
            ":user" => $user,
            ":pass" => $pass
        ]);
        
        header("Location: login.php");
    }
    
}

    require_once("./core/vistas/signup.php");
   
?>