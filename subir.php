<?php
    //recibimos los datos de la imagen

    $nombre_imagen=$_FILES['imagen']['name'];
    $tipo_imagen=$_FILES['imagen']['type'];
    $tamagno_imagen=$_FILES['imagen']['size'];

    //if($tamagno_imagen<=30000){
        if($tipo_imagen="image/jpeg"||$tipo_imagen="image/jpg"||$tipo_imagen="image/png"){
        //ruta de la carpeta de destino en el servidor
        
        $carpeta_destino=$_SERVER['DOCUMENT_ROOT'].'/CRUD/imagenes/';

    //movemos la imagen del directorio temporal al directorio escogido

    move_uploaded_file($_FILES['imagen']['tmp_name'], $carpeta_destino.$nombre_imagen);
        }else{
            echo'solo se permiten archivos jpg/jpeg/png';
        }
   // }else{
     //   echo'el tamaño del archivo es demasiado grnade';

  //  }
?>