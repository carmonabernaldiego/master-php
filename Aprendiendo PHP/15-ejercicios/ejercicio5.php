<?php
/**
 * Crear un array con el contenido :
 * ACCION AVENTURA DEPORTES
 * COD    Uncharted   Fifa
 * Cada fila en un fichero separado (include)
 */
$tabla = array(
    "ACCION" => array('COD','DOOM'),
    "AVENTURA" => array('Zelda Breath of the Wild','Uncharted 4'),
    "DEPORTES" => array('NBA 2K', 'F1')
);
$categorias = array_keys($tabla);
?>
<table border="1px">
    <?php require_once('ejercicio5/cabecera.php'); ?>
    <?php include('ejercicio5/primera.php'); ?>
</table>