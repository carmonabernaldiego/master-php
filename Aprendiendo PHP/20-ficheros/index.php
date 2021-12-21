<?php
$abrirArchivo = fopen('fichero', "a+");

while (!feof($abrirArchivo)) {
    $contenido = fgets($abrirArchivo);
    echo $contenido . '<br/>';
}

//fwrite($abrirArchivo, 'Holaaaaa');
fclose($abrirArchivo);

//copy('fichero','ficheroCopia') or die('Error al copiar');
//unlink('ficheroCambiadoDeNombre');

if (file_exists('fichero')) {
    echo 'Existe';
} else {
    echo 'No existe';
}