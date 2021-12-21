<?php
if (!empty($_POST['nombre']) && !empty($_POST['apellidos']) && !empty($_POST['edad']) && !empty($_POST['email']) && !empty($_POST['password'])) {
    $error = 'ok';
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $edad = (int) $_POST['edad'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!(is_string($nombre) || preg_match("/[a-zA-Z ]+/", $nombre))) {
        $error = 'nombre';
        header("Location:index.php?error=$error");
    }
    if (!(is_string($apellidos) || preg_match("/[a-zA-Z ]+/", $apellidos))) {
        $error = 'apellidos';
        header("Location:index.php?error=$error");
    }
    if (!(is_integer($edad))) {
        $error = 'edad';
        header("Location:index.php?error=$error");
    }
    if (!(is_string($email) || filter_val($email, FILTER_VALIDATE_EMAIL))) {
        $error = 'email';
        header("Location:index.php?error=$error");
    }
    if (strlen($password) < 5) {
        $error = 'password';
        header("Location:index.php?error=$error");
    }
} else {
    $error = 'faltan valores';
}

if ($error !== 'ok') {
    header("Location:index.php?error=$error");
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>PHP Validacion</title>
    <meta charset="utf-8">
</head>

<body>
    <?php if ($error == 'ok') : ?>
        <h2>Validados correctamente</h2>
        <p><?= $nombre ?>
        <p>
        <p><?= $apellidos ?>
        <p>
        <p><?= $edad ?>
        <p>
        <p><?= $email ?>
        <p>
        <?php endif; ?>
</body>

</html>