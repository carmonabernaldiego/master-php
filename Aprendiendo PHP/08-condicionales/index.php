<?php

/**
* IF
*/
$color = "green";

if ($color == "red") {
    echo 'El color es rojo' . '<br/>';
} else {
    echo "No es de color rojo" . '<br/>';
}
/*
* Operadores de comparacion
* == igual
* != distinto
* === identico comprueba si es el mismo tipo de datos además de su valor
* !== no identico (mas usado)
* <> distinto
* <, >, <=, >=
*/

$year = 2021;

if ($year === 2021) {
    echo 'Estamos en 2021' . '<br/>';
} else {
    echo 'No estamos en 2021' . '<br/>';
}

$nombre = 'Samuel Murcia';
$ciudad = 'Murcia';
$continente = 'Europa';
$edad = 30;
$edadMayoria = 18;

if ($edad >= $edadMayoria) {
    echo '<h1>' . $nombre . ' es mayor de edad ' . '</h1>';
    if ($continente === 'Europa') {
        echo '<h2>' . 'y es de Europa' . '</h2>';
    }
} else {
    echo '<h1>' . $nombre . 'no es mayor de edad' . '</h1>';
}

$dia = 3;

if ($dia === 1) {
    echo 'Es lunes';
} else if ($dia == 2) {
    echo 'Es martes';
} else {
    echo "No es ni lunes ni martes" . '<br/>';
}

$edad1 = 16;
$edad2 = 67;
$edadOficial = 12;

if ($edadOficial >= $edad1 && $edadOficial <= $edad2) {
    echo 'Puede trabajar' . '<br/>';
} else {
    echo 'No puede trabajar' . '<br/>';
}

$pais = 'Mexico';

if ($pais === 'Mexico' || $pais === 'España') {
    echo 'Aquí se habla español' . '<br/>';
}

switch ($dia) {
    case 1:
        echo "Dia 1";
        break;
    case 2:
        echo "Dia 2";
        break;
    default:
        echo "Dia d";
        break;
}
goto marca;

echo "<h3>Instruccion 1</h3>";
echo "<h3>Instruccion 2</h3>";
echo "<h3>Instruccion 3</h3>";

marca:
echo "<h3>Instruccion 5</h3>";