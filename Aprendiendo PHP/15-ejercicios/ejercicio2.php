<?php

/**
 * Mientras su longitud sea menor de 120, añadir elementos
 */
$numeros = array();
while(count($numeros) <120 ){
    array_push($numeros,rand());
}
var_dump($numeros);