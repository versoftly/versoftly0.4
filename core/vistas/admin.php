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

        <link rel="icon" type="image/x-icon" 
        href="http://versoftlyfpf.lcl/versoftly0.4/core/versoftly3.ico">

    </head>

    <body class="borde">
    <a id="top"></a>
        <header class="columna">

            <div class="fila">
                <h2 class="borde">

                    <svg xmlns="http://www.w3.org/2000/svg" 
                        class="icon icon-tabler icon-tabler-user-circle" 
                        width="44" height="44" viewBox="0 0 24 24" 
                        stroke-width="1.5" stroke="#00bfd8" fill="none" 
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                        <path d="M12 10m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                        <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855" />
                    </svg>

                    <?php echo $_SESSION['user']; ?>
                </h2>
            </div>

        </header>
        
        <main class="columna">
            <?php
                if (empty($usuarios)) {
                    echo '
                     <div class="borde">
                        <div class="columna">
                            <svg xmlns="http://www.w3.org/2000/svg" 
                            class="icon icon-tabler icon-tabler-error-404" 
                            width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" 
                            stroke="#c9de00" fill="none" stroke-linecap="round" 
                            stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M3 7v4a1 1 0 0 0 1 1h3" />
                                <path d="M7 7v10" />
                                <path d="M10 8v8a1 1 0 0 0 1 1h2a1 1 0 0 0 1 -1v-8a1 1 0 0 0 -1 
                                -1h-2a1 1 0 0 0 -1 1z" />
                                <path d="M17 7v4a1 1 0 0 0 1 1h3" />
                                <path d="M21 7v10" />
                            </svg> Not users Found.
                        </div>
                     </div>
                    ';
                } else {
                    foreach($usuarios as $usuario) {
                        echo '
                            <h3 class="fila">'
                                .$usuario["user"].
                                '

                                <a href="deleteUser.php?id='.$usuario["id"].'" class="boton">
                                
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
                            </h3>
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

                <a href="privado.php" class="boton">
                    Back 
                    <svg xmlns="http://www.w3.org/2000/svg" 
                        class="icon icon-tabler icon-tabler-logout" width="44" 
                        height="44" viewBox="0 0 24 24" stroke-width="1.5" 
                        stroke="#ff2825" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 
                        2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
                        <path d="M9 12h12l-3 -3" />
                        <path d="M18 15l3 -3" />
                    </svg>

                </a>
               
                <a href="#top" class="boton">
                    Top 
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