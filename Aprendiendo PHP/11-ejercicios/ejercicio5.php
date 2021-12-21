<?php
/*
   Mostrar todos los numeros entre dos numeros que llegan por GET
*/
$numero1 = 0;
$numero2 = 0;

if (isset($_GET['numero1']) && isset($_GET['numero2'])) {
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];
    if ($numero2 < $numero1) {
        $cambio = $numero1;
        $numero1 = $numero2;
        $numero2 = $cambio;
    }
    for ($i = $numero1 + 1; $i <  $numero2; $i++) {
        echo $i . '<br/>';
    }
} else {
    echo "Añadir dos numeros";
}