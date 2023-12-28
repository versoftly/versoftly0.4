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

        <title>versoftly, fast && powerful</title>

        <link rel="stylesheet" href="core/apariencia.css">

    </head>

    <body class="borde">
    <a id="top"></a>
        <header class="columna">

            <div class="borde">
                <img src="../../versoftly0.4/core/versoftly2.png" 
                alt="logo" width="100%">
            </div>

        </header>
        
        <main class="columna">

            <h1 class="borde">
                FORMULARIO New Record.
            </h1>

            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="borde">
                    
                <p class="fila">
                    Titulo
                    <input type="text" name="titulo" 
                    placeholder="titulo del articulo">
                </p>

                <p class="fila">
                    Usuario
                    <input type="text" name="usuario" 
                    placeholder="escritor del articulo">
                </p class="fila">

                <p class="fila">
                    Imagen
                    <select name="imagen">
                        <option value="versoftly1.png">versoftly 1</option>
                        <option value="versoftly2.png">versoftly 2</option>
                        <option value="versoftly3.png">versoftly 3</option>
                    </select>
                </p>
                

                <p class="fila">
                    Contenido
                    <textarea name="contenido" 
                    placeholder="Contenido del articulo">
                    </textarea>
                </p>

                <div class="borde">
                    <input type="submit" value="Agregar" class="boton">
                </div>

            </form>

        </main>
        
        <footer class="columna">

            <p class="fila">
                <b class="borde">&copy; copyrights . Todos los derechos reservados - 
                    Ramiro G. Glez 2023.
                </b>
            </p>

            <div class="columna">

                <div class="fila">

                    <a href="index.php" class="boton">

                        <svg xmlns="http://www.w3.org/2000/svg" 
                            class="icon icon-tabler icon-tabler-home" 
                            width="44" height="44" viewBox="0 0 24 24" 
                            stroke-width="1.5" stroke="#00b341" fill="none" 
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                            <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                            <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                        </svg>

                    </a>

                    <a href="update.php" class="boton">

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

                    <a href="signup.php" class="boton">

                        <svg xmlns="http://www.w3.org/2000/svg" 
                            class="icon icon-tabler icon-tabler-user-plus" width="44" 
                            height="44" viewBox="0 0 24 24" stroke-width="1.5" 
                            stroke="#00b341" fill="none" stroke-linecap="round" 
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                            <path d="M16 19h6" />
                            <path d="M19 16v6" />
                            <path d="M6 21v-2a4 4 0 0 1 4 -4h4" />
                        </svg>

                    </a>

                    <a href="login.php" class="boton">

                        <svg xmlns="http://www.w3.org/2000/svg" 
                            class="icon icon-tabler icon-tabler-password" width="44" 
                            height="44" viewBox="0 0 24 24" stroke-width="1.5" 
                            stroke="#00b341" fill="none" stroke-linecap="round" 
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M12 10v4" />
                            <path d="M10 13l4 -2" />
                            <path d="M10 11l4 2" />
                            <path d="M5 10v4" />
                            <path d="M3 13l4 -2" />
                            <path d="M3 11l4 2" />
                            <path d="M19 10v4" />
                            <path d="M17 13l4 -2" />
                            <path d="M17 11l4 2" />
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

            </div>

        </footer>

    </body>

</html>