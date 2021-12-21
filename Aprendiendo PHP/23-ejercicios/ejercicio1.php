<?php
/**
 * Crear una sesion que aumente su valor en 1 o disminuya en 1 en funcion al parametro GET[counter] está a 1 o a 0
 *
 */
session_start();
if(!isset($_SESSION['contador'])){
    $_SESSION['contador'] = 10;
}
if(isset($_GET['counter'])){
    $contador = (int) $_GET['counter'];
    if($contador === 1){
        $_SESSION['contador']++;
    }
    else{
        $_SESSION['contador']--;
    }
    echo $_SESSION['contador'];
}
else{
    echo "Introduzca un parametro counter";
}


