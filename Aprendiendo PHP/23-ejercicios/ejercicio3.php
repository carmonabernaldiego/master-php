<?php
/**
 * Calculadora con un formulario con dos 2 inputs y dos botones
 */
function calculadora($numero1, $numero2, $operacion){
    $resultado = 0;
    switch($operacion){
        case 'Suma':
            $resultado = $numero1 + $numero2;
            break;
        case 'Resta':
            $resultado = $numero1 - $numero2;
            break;
        case 'Producto':
            $resultado = $numero1 * $numero2;
            break;
        case 'Division':
            $resultado = $numero1 / $numero2;
            break;
    }
    return $resultado;
}
?>
<!DOCTYPE html>
 <html lang="es">
    <head>
        <meta charset="utf-8"/>
    </head>
    <body>
    <form action="ejercicio3.php" method="GET">
         <label for="cifra1">Cifra 1</label> <br/>
        <input type="number" name="cifra1" required="required"/><br/>
        <label for="cifra2">Cifra 2</label> <br/>
        <input type="number" name="cifra2" required="required"/><br/>
        Operaciones:
            <select name="operacion">
                <option>Suma</option>
                <option>Resta</option>
                <option>Producto</option>
                <option>Division</option>
            </select>
            <br/>
        <input type="submit" value="Enviar"/><br/>
    </form>
    <?php if(!empty($_GET['cifra1']) && !empty($_GET['cifra2']) && !empty($_GET['operacion'])):
            echo calculadora((int) $_GET['cifra1'],(int) $_GET['cifra2'],$_GET['operacion']);
        endif; ?>
    </body>
 </html>