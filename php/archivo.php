<?php
$nombre = $_FILES['userfile']['name'];
$guardado = $_FILES['userfile']['tmp_name'];

if(!file_exists('archivos')){
    mkdir('../archivos', 0777, true);
    if(file_exists('../archivos')){
        if(move_uploaded_file($guardado, '../archivos/'.$nombre)){
            header("Location:../view/endbuy.html");
        }else{
            echo "El archivo no se guardado";
        }
    }
}else{
    if(move_uploaded_file($guardado, '../archivos/'.$nombre)){
//        echo "Archivo guardado con exito!!!";
        header("Location:../view/endbuy.html");
    }else{
        echo "El archivo no se guardado";
    }
}
