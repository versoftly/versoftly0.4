<?php session_start ();

    if (!isset($_SESSION['user'])) {
        header("Location: login.php");
    }

    require_once "./core/configuraciones.php";

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
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        $titulo = htmlspecialchars($_POST['titulo']);
        $texto = $_POST['contenido'];
        $thumb = $_POST['imagen'];
        
        $file = "core/".$_POST['imagen'];
        
        move_uploaded_file($thumb,$file);
        
        $stmt = $conn->prepare("INSERT INTO ideas (usuario,titulo_de_la_idea,contenido_de_la_idea,portada) VALUES 
        (:user,:titulo,:texto,:thumb)");
        
        $stmt->execute([
            ":user" => $_SESSION['user'],
            ":titulo" => $titulo,
            ":texto" => $texto,
            ":thumb" => $thumb
            
        ]);
        
        header("Location: privado.php");
        
    }
            
            
 

    require_once "./core/vistas/new.php";
   
?>