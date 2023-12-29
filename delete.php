<?php session_start();


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

$id = htmlspecialchars($_GET['id']);

if(!$id) {
    header('Location: privado.php');
}

$stmt = $conn->prepare("DELETE FROM ideas WHERE id=:id");
$stmt->execute([
    ":id" => $id    
]);

header('Location: privado.php');