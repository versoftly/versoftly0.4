<?php session_start();

if (!isset($_SESSION['user'])) {
        
    header ("Location: index.php");
    
}

$servername = "localhost";
$username = "root";
$password = "versoftly";
$database = "mosteigd_versoftlyfpf";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
} catch(PDOException $e) {
    echo "error ".$e->getMessage();
}

if (!$conn) {
    die("Error de conexion con la basededatos");
}

$postsPorPagina = 5;

$pageActual = isset($_GET['page']) ? (int)$_GET['page'] : 1;

$inicio = ( $pageActual > 1 ) ? $pageActual * $postsPorPagina - $postsPorPagina : 0; 

$sentencia = $conn->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM ideas WHERE usuario = :user LIMIT $inicio, $postsPorPagina");

$sentencia->execute([
    ":user" => $_SESSION['user']
]);

$articulos = $sentencia->fetchAll();

require_once "./core/vistas/privado.php";