<?php
/**Crear script que tenga cuatro variables (un array, un string, un int y un bool) y que imprima un mensaje
 * segun el tipo de variable que sea
 */
$array = array();
$string = 'Esto es un string';
$int = 5;
$booleano = true;

if(is_array($array)){
    echo '$array Esto es un array';
}
if(is_string($string)){
    echo '$string es un string';
}
if(is_int($int)){
    echo '$int Esto es un entero';
}
if(is_bool($booleano)){
    echo '$booleano es un booleano';
}