<?php

function printScreen($text){
    echo $text . '<br/>';
    echo $text . '<br/>';
    echo $text . '<br/>';
    echo $text . '<br/>';
};

function tablaMultiplicar($numero){
    for($i = 1; $i <= 10 ; $i++){
        echo ($numero * $i) . '<br/>';
    }
}
/*
for($i = 1; $i <= 10; $i++){
    tablaMultiplicar($i);
}*/

function calculator($numero1, $numero2, $negrita = false){
    $cadena_texto = '';
    if($negrita){
        $cadena_texto = $cadena_texto . '<h1>';
    }
    $cadena_texto = $cadena_texto .'Suma de dos numeros : '.($numero1 + $numero2) . '<br/>';
    $cadena_texto = $cadena_texto .'Resta de dos numeros : '.($numero1 - $numero2) . '<br/>';
    $cadena_texto = $cadena_texto . 'Producto de dos numeros : '.($numero1 * $numero2) . '<br/>';
    $cadena_texto = $cadena_texto . 'Division de dos numeros : '.($numero1 / $numero2) . '<br/>';
    $cadena_texto = $cadena_texto . '<hr/>';
    if($negrita){
        $cadena_texto = $cadena_texto . '</h1>';
    }
    return $cadena_texto;

}
echo calculator(4,6,true);
echo calculator(61,19);

function getNombre($nombre){
    return 'El nombre es ' . $nombre;
}
function getApellidos($apellidos){
    return 'Los apellidos son '. $apellidos;
}
function devuelve($nombre, $apellidos){
    return getNombre($nombre) .'<br/>'. getApellidos($apellidos);
}
echo devuelve('Samuel','Sanchez');