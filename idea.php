<?php session_start();

require_once "./core/configuraciones.php";

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


$idArticle = trim($_GET['id']);
$idArticle = stripslashes($idArticle);
$idArticle = htmlspecialchars($idArticle);

if (empty($idArticle)) {

    header("Location: privado.php");
}

$post = $conn->prepare("SELECT * FROM ideas WHERE id = ".$idArticle." LIMIT 1");

$post->execute();

$post = $post->fetchAll();

if(!$post) {
    header("Location: privado.php");
}

$post = $post[0];

require_once "./core/vistas/idea.php";

?>