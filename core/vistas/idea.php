<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Free Web tutorials, informacion">
        <meta name="keywords" content="HTML, CSS, JavaScript, PHP, versoftly, fp, fast, power, 
            powerful
        ">
        <meta name="author" content="Ramiro Garcia Gonzalez">
        <link href="https://fonts.googleapis.com/css2?family=Krub:wght@400;700&display=swap" 
        rel="stylesheet">

        <title>fast , powerful & free</title>

        <link rel="stylesheet" href="core/apariencia.css">

    </head>

    <body class="borde">
        <a id="top"></a>
        <header class="columna">

            <div class="borde">
                <img src="core/<?php echo $post['portada']; ?>" 
                alt="logo" width="100%">
            </div>

        </header>
        
        <main class="columna">

            <h2 class="borde"><?php echo $post['titulo_de_la_idea']; ?></h2>

            <h4 class="borde">Author: <?php echo $post['usuario']; ?></h4>

            <h4 class="borde">LastUpdate: <?php echo $post['fecha_de_actualizacion']; ?></h4>

            <div class="fila">

                <section class="borde">
                    <?php echo nl2br($post['contenido_de_la_idea']); ?>
                </section>

            </div>

        </main>

        
        <footer class="columna">
            
            <p class="borde">
                &copy; copyrights . Todos los derechos reservados - Ramiro G. Glez 2023.
            </p>

            <div class="fila">

                <a href="privado.php" class="boton">
                    
                    <svg xmlns="http://www.w3.org/2000/svg" 
                        class="icon icon-tabler icon-tabler-square-letter-x" 
                        width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" 
                        stroke="#ff2825" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M3 3m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v14a2 2 0 0 1 
                        -2 2h-14a2 2 0 0 1 -2 -2z" />
                        <path d="M10 8l4 8" />
                        <path d="M10 16l4 -8" />
                    </svg>

                </a>

            </div>

        </footer>

    </body>

</html>