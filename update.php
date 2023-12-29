<?php session_start ();

    if (!isset($_SESSION['user'])) {
        header("Location: login.php");
    }

    require_once ("./core/configuraciones.php");

    $servername = "localhost";
    $username = "root";
    $password = "versoftly";
    $database = "mosteigd_versoftlyfpf";
    $errores = '';
    
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
        $id = (int)$_POST['id'];
        $thumb_guardada = $_POST['actual'];
        
        
        if(empty($thumb)) {
            $thumb = $thumb_guardada;
        } else {
            
            $file = "core/".$_POST['imagen'];
            move_uploaded_file($_POST['imagen'],$file);
            $thumb = $_POST['imagen'];
            
        }

        if (empty($titulo) || empty($texto) || empty($thumb)|| empty($id)) {
            $errores = "<li>Hay campos vacios</li>";
        } else {

            $timestamp = date('Y-m-d H:i:s', mktime(0, 0, 0, 7, 1, 2000));
            
            $data = [
                ':id' => $id,
                ':titulo' => $titulo,
                ':texto' => $texto,
                ':fecha' => $timestamp,
                ':thumb' => $thumb
            ];
            
            $sql = "UPDATE ideas SET titulo_de_la_idea=:titulo, contenido_de_la_idea=:texto, fecha_de_actualizacion=:fecha, portada=:thumb WHERE id=:id";
            $stmt= $conn->prepare($sql);
            $stmt->execute($data);
            
            header("Location: privado.php");

        }
        
    } else {
        
        $idArticle = trim($_GET['id']);
        $idArticle = stripslashes($idArticle);
        $idArticle = htmlspecialchars($idArticle);
        
        $post = $conn->prepare("SELECT * FROM ideas WHERE id = ".$idArticle." LIMIT 1");

        $post->execute();
        
        $post = $post->fetchAll();
        
        if(!$post) {
            header("Location: privado.php");
        }
        
        $post = $post[0];
        
    }

    require_once ("./core/vistas/update.php");
   
?>