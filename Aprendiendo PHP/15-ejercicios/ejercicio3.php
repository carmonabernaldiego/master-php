<?php
/*
   Comprueba si la variable está vacía y si está vacía rellenarla con texto en minusculas y mostrarlo en mayusculas
*/
if (isset($_GET['texto'])) {
    $variable = $_GET['texto'];
    if (empty($variable)) {
        $variable = strtolower('Texto de prueba');
        echo '<strong>' . strtoupper($variable) . '</strong>';
    }
}