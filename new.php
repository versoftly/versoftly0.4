<?php session_start ();

    if (!isset($_SESSION['user'])) {
        header("Location: login.php");
    }

    require_once "./core/configuraciones.php";

    $servername = "localhost";
    $username = "root";
    $password = "versoftly";
    $database = "mosteigd_blog";
    
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
        $texto = $_POST['texto'];
        $thumb = $_FILES['foto']['name'];
        
        $file = "core/".$_FILES['foto']['name'];
        
        move_uploaded_file($thumb,$file);
        
        $stmt = $conn->prepare("INSERT INTO articulos (titulo,texto,thumb,user) VALUES 
        (:titulo,:texto,:thumb,:user)");
        
        $stmt->execute([
            ":titulo" => $titulo,
            ":thumb" => $thumb,
            ":texto" => $texto,
            ":user" => $_SESSION['user']
        ]);
        
        header("Location: index.php");
        
    }
            
            
 

    require_once "./core/vistas/new.php";
   
?>