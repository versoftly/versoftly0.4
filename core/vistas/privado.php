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
                <h2>Bienvenid(a/o) Se&ntilde;(a/o)r
                    <?php echo $_SESSION['user']; ?>
                </h2>
            </div>

        </header>
        
        <main class="columna">
            <?php
                if (empty($articulos)) {
                    echo "
                     <div class='borde'>
                     <div class='columna'>404 Not Articles Found.</div>
                     </div>
                    ";
                } else {
                    foreach($articulos as $articulo) {
                        echo '

                            <div class="borde w35p">
                                <h3 class="fila">'
                                .$articulo["titulo_de_la_idea"].
                                '</h3>
                                <a href="update.php?id='.$articulo["id"].'" class="boton">
                
                                    <svg xmlns="http://www.w3.org/2000/svg" 
                                        class="icon icon-tabler icon-tabler-refresh" width="44" 
                                        height="44" viewBox="0 0 24 24" stroke-width="1.5" 
                                        stroke="#00b341" fill="none" stroke-linecap="round" 
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M20 11a8.1 8.1 0 0 0 -15.5 -2m-.5 -4v4h4" />
                                        <path d="M4 13a8.1 8.1 0 0 0 15.5 2m.5 4v-4h-4" />
                                    </svg>
                
                                </a>
                            </div>
                        
                        ';
                    }
                }
            ?>

        </main>

        
        <footer class="columna">
            
            <p class="borde">
                &copy; copyrights . Todos los derechos reservados - Ramiro G. Glez 2023.
            </p>

            <div class="fila">

                <a href="new.php" class="boton">

                    <svg xmlns="http://www.w3.org/2000/svg" 
                        class="icon icon-tabler icon-tabler-pencil-plus" 
                        width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" 
                        stroke="#00b341" fill="none" stroke-linecap="round" 
                        stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" />
                        <path d="M13.5 6.5l4 4" />
                        <path d="M16 19h6" />
                        <path d="M19 16v6" />
                    </svg>

                </a>

                <a href="logout.php" class="boton">

                    <svg xmlns="http://www.w3.org/2000/svg" 
                        class="icon icon-tabler icon-tabler-door-exit" 
                        width="44" height="44" viewBox="0 0 24 24" 
                        stroke-width="1.5" stroke="#00b341" fill="none" 
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M13 12v.01" />
                        <path d="M3 21h18" />
                        <path d="M5 21v-16a2 2 0 0 1 2 -2h7.5m2.5 10.5v7.5" />
                        <path d="M14 7h7m-3 -3l3 3l-3 3" />
                    </svg>

                </a>
               
                <a href="#top" class="boton">

                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler 
                        icon-tabler-arrow-big-up" width="44" height="44" viewBox="0 0 24 24" 
                        stroke-width="1.5" stroke="#00b341" fill="none" stroke-linecap="round" 
                        stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M9 20v-8h-3.586a1 1 0 0 1 -.707 -1.707l6.586 -6.586a1 1 
                        0 0 1 1.414 0l6.586 6.586a1 1 0 0 1 -.707 1.707h-3.586v8a1 1 0 0 1 -1 
                        1h-4a1 1 0 0 1 -1 -1z" />
                    </svg>

                </a>

            </div>

        </footer>

    </body>

</html>