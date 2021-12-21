<?php
    $numero=0;
    while($numero <= 100){
        echo "$numero, ";
        $numero++;
    }
    echo "<hr/>";
    //Con get
    if(isset($_GET['numero'])){
        $numero = (int) $_GET['numero'];
    }
    else{
        $numero = 1;
    }
    echo "<h1>Tabla de multiplicar del numero $numero</h1>";
    $i = 1;
    while($i <= 10){
        echo "$numero X $i = ". ($numero * $i) .'<br/>';
        $i++;
    }
    echo "<hr/>";
    $i = 10;
    do{
        echo $i . '<br/>';
        $i++;
    }while($i <= 10);