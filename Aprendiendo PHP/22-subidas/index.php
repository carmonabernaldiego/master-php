<!DOCTYPE HTML>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title>Subir archivos PHP </title>
</head>

<body>
    <h1>Subir imagenes PHP</h1>
    <form action="upload" method="POST" enctype="multipart/form-data">
        <p><input type="file" name="archivo" />
            <input type="submit" value="Enviar" />
        </p>
    </form>
    <h1>Listado de imagenes</h1>
    <?php
    $gestor = opendir('images');
    if ($gestor) :
        while (($imagen = readdir($gestor))) {
            if ($imagen != '.' && $imagen != '..') {
                echo "<img src='images/$imagen'/>";
            }
        }
    endif;
    ?>
</body>

</html>