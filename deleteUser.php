<?php session_start();


require_once "core/configuracionesLogin.php";

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
    header('Location: admin.php');
}

$stmt = $conn->prepare("DELETE FROM login_signup WHERE id=:id");
$stmt->execute([
    ":id" => $id    
]);

header('Location: admin.php');