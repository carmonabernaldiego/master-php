<!DOCTYPE html>
<html lang="es">
    <head>
        <title>PHP Validacion</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            if(isset($_GET['error'])){
                $error = $_GET['error'];
                if($error !== 'ok'){
                    echo '<strong style="color:red">Faltan valores por introducir</strong>';
                }
            }
        ?>
        <h1>Validar formularios</h1>
        <form action="procesarFormulario.php" method="POST">
            <label for="nombre">Nombre</label> <br/>
            <input type="text" name="nombre" required="required"/><br/>
            <label for="apellidos">Apellidos</label> <br/>
            <input type="text" name="apellidos" required="required"/><br/>
            <label for="edad">Edad</label> <br/>
            <input type="number" name="edad" required="required" pattern="[0-9]+"/><br/>
            <label for="email">Email</label> <br/>
            <input type="email" name="email" required="required"/><br/>
            <label for="password">Password</label> <br/>
            <input type="password" name="password" required="required"/><br/>
            <input type="submit" value="Enviar"/><br/>
        </form>
    </body>
</html>