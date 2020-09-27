<?php
print_r($_FILES);
$nombre = $_FILES['userfile']['name'];
$guardado = $_FILES['userfile']['tmp_name'];
var_dump($nombre);
var_dump($guardado);

if(!file_exists('archivos')){
    mkdir('../archivos', 0777, true);
    if(file_exists('../archivos')){
        echo "paso el if existe";
        var_dump($nombre);
        var_dump($guardado);
        if(move_uploaded_file($guardado, '../archivos/'.$nombre)){
            echo "Archivo guardado con exito!!!";
        }else{
            echo "El archivo no se guardado";
        }
    }
}else{
    if(move_uploaded_file($guardado, '../archivos/'.$nombre)){
        echo "Archivo guardado con exito!!!";
    }else{
        echo "El archivo no se guardado";
    }
}