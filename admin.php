<?php session_start();

if (!isset($_SESSION['user'])) {
        
    header ("Location: index.php");
    
}

require_once "core/configuracionesLogin.php";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
} catch(PDOException $e) {
    echo "error ".$e->getMessage();
}

if (!$conn) {
    die("Error de conexion con la basededatos");
}

$sentencia = $conn->prepare("SELECT * FROM login_signup");

$sentencia->execute();

$usuarios = $sentencia->fetchAll();

require_once "./core/vistas/admin.php";