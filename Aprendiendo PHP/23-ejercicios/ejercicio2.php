<?php
/*
  1. Una funcion que valide un email con filter_var y devolver el resultado
  2. Recoger variable get, validarla y mostrar resultado
*/
function validarEmail()
{
    $resultado = '';
    if (!empty($_GET['email'])) {
        if (filter_var($_GET['email'], FILTER_VALIDATE_EMAIL)) {
            $resultado .= 'Es un email ';
        } else {
            $resultado .= 'No es un email ';
        }

        if (is_string($_GET['texto']) && preg_match("/[a-zA-Z ]+/", $_GET['texto'])) {
            $resultado .= 'y el texto está bien';
        } else {
            $resultado .= 'y el texto no está bien';
        }
    } else {
        $resultado = 'No se ha enviado nada aún';
    }
    return $resultado;
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
</head>

<body>
    <form action="ejercicio2.php" method="GET">
        <label for="texto">Texto</label> <br />
        <input type="text" name="texto" required="required" /><br />
        <label for="email">Email</label> <br />
        <input type="email" name="email" required="required" /><br />
        <input type="submit" value="Enviar" /><br />
    </form>
    <?php echo validarEmail(); ?>
</body>

</html>