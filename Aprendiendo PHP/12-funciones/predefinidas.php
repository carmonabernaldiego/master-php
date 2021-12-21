<?php

//Debug
$nombre = 'ejemplo';
var_dump($nombre);

//Fechas
echo date('d-m-Y') . '<br/>';
echo time() . '<br/>';

//Matematicas
echo sqrt(4);
echo '<br/>';
echo rand(10, 21);
echo '<br/>';
echo pi();
echo '<br/>';
echo round(42.73, 1);

//Mas funciones
echo '<br/>';
echo gettype($nombre);

echo '<br/>';
echo is_string($nombre);

echo '<br/>';
$frase = '  mi contenido  ';
echo trim($frase);

echo '<br/>';
$year = 2022;
unset($year);

echo '<br/>';
$texto = '';
echo empty($texto);

echo '<br/>';
$cadena = '12345';
echo strlen($cadena);

echo '<br/>';
echo strpos($cadena, '1');

echo '<br/>';
$frase = 'Me gusta la bici';
$replace = str_replace("bici", "mota", $frase);

echo $replace;
echo strtolower($frase);
echo strtoupper($frase);