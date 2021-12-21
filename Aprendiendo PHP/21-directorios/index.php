<?php

if(!is_dir('My directory')){
    mkdir('My directory',777) or die('Error');
}
else{
    echo 'Existe la carpeta';
}

if($gestor = opendir('My directory')){
    while(false !==($archivo = readdir($gestor))){
        echo $archivo .'<br/>';
    }
}
