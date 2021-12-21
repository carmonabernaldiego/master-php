<?php

$frase = 'Ni los genios son tan genios ni los mediocres son tan mediocres';

function mostrarFrase()
{
    global $frase;
    $year = '2022';
    return $frase . ' ' . $year;
}

echo mostrarFrase();

//Funciones variables
function buenosDias()
{
    return 'buenos dias';
}

function buenasTardes()
{
    return 'que tal todo';
}

function buenasNoches()
{
    return 'buenas noches';
}

$horario = "buenasTardes";
echo "buenosDias"() . $horario();