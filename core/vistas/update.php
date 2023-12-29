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
                <img src="../../versoftly0.4/core/versoftly1.png" 
                alt="logo" width="100%">
            </div>

        </header>
        
        <main class="columna">

            <h1 class="borde">
                FORMULARIO Update a Record.
                <?php if($errores != ''): ?>
                    <div class="fila">
                        <p class="columna" style="border: 3px solid red;">
                            Ocurri&oacute; un Error<br>
                            <?php echo $errores; ?>
                        </p>
                    </div>
                <?php endif; ?>
            </h1>

            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="borde">
                    
                <input type="hidden" name="id" value="<?php echo $post['id']; ?>">
                <p class="fila">
                    Titulo
                    <input type="text" name="titulo" 
                    placeholder="titulo del articulo"
                    value="<?php echo $post['titulo_de_la_idea']; ?>">
                </p>

                <p class="fila">
                    Usuario
                    <input type="text" name="usuario" 
                    placeholder="escritor del articulo"
                    value="<?php echo $post['usuario']; ?>">
                </p class="fila">

                <p class="fila">
                    Imagen
                    <select name="imagen">
                        <option value="versoftly1.png">versoftly 1</option>
                        <option value="versoftly2.png">versoftly 2</option>
                        <option value="versoftly3.png">versoftly 3</option>
                    </select>
                    <input type="hidden" name="actual" value="<?php echo $post['portada']; ?>">
                </p>

                <p class="fila">
                    Contenido
                    <textarea name="contenido" 
                    placeholder="Contenido del articulo">
                    <?php echo $post['contenido_de_la_idea']; ?>"
                    </textarea>
                </p>

                <div class="borde">
                    <input type="submit" value="Actualizar" class="boton">
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

                    <a href="privado.php" class="boton">

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

            </div>

        </footer>

    </body>

</html>