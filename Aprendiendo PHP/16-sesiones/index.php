<?php
/**
 * Almacenar y persistir datos del usuario mientras navega en un sitio web hasta cierre de sesion
 */

 //Inicio de sesion
 session_start();

 //Local
 $variableNormal = 'Soy un string';
//Sesion
 $_SESSION['variablePersistente'] = 'Soy una sesion activa';

 echo $variableNormal . '<br/>';
 echo $_SESSION['variablePersistente'];