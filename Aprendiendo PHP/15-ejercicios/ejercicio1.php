<?php
//Un array con 8 numeros enteros,
//recorrer y mostrarlo, ordenar y mostrarlo, mostrar su longitud, buscar un elemento dentro del array.
function recorrerArray($numeros)
{
    $resultado = '';
    foreach ($numeros as $numero) {
        $resultado .= $numero . '</br>';
    }
    return $resultado;
}

$numeros = [4, 1, 67, 1, 56, 8, 12, 51];

echo recorrerArray($numeros);
echo '<hr/>';

sort($numeros);
echo recorrerArray($numeros);
echo '<hr/>';

echo 'Longitud del array :' . count($numeros) . '</br>';
echo '<hr/>';

echo 'Buscar un elemento aleatorio : ' . $numeros[array_rand($numeros)] . '</br>';

$busqueda = 56;

if (!empty(array_search($busqueda, $numeros))) {
    echo "Existe en la posicion " . array_search($busqueda, $numeros);
} else {
    echo "No existe";
}