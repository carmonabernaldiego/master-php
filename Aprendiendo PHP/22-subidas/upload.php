<?php

$file= $_FILES['archivo'];
$nombre = $file['name'];
$type = $file['type'];
if($type === 'image/jpeg'|| $type ==='image/gif' || $type === 'image/png' ||$type === 'image/jpg'){
    if(!is_dir('images')){
        mkdir('images',0777);
    }
    move_uploaded_file($file['tmp_name'],'images/'. $nombre);
}
else{
    header("Refresh:3; URL=index.php");
    echo "Sube una imagen con formato jpg/png/gif";
}
var_dump($file);