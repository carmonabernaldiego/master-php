<?php
/**
 * Imprimir por pantalla las tablas de multiplicar del 1 al 10 en tablas HTML
 */
for($i = 1; $i <= 10; $i++){
    $tabla = '<table border=1px>';
    $header = '<tr> <th>Cifra</th> <th>Posicion</th></tr>';
    $tabla = $tabla . $header;
    $fila= '';
    for($j = 1; $j <= 10; $j++){
        $fila = $fila .'<tr><td>'.$i.'</td><td>'.($i*$j).'</td></tr>';
    }
    $tabla = $tabla . $fila;
    $tabla = $tabla .'</table> <hr/>';
    echo $tabla;

}