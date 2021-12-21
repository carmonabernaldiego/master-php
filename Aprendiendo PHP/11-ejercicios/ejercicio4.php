<?php

/*
    Recoger dos numeros con GET y hacer suma, resta, multiplicacion y division
 */

$numero1 = 0;
$numero2 = 1;
if(isset($_GET['numero1'])){
    $numero1 = $_GET['numero1'];
}
if(isset($_GET['numero2'])){
    $numero2 = $_GET['numero2'];
}
echo 'La suma es '.($numero1 + $numero2). '<br/>';
echo 'La resta es '.($numero1 - $numero2). '<br/>';
echo 'La multiplicación es '.($numero1 * $numero2). '<br/>';
echo 'La división es '.($numero1 / $numero2). '<br/>';