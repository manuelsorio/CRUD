<?php
include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['nom'];
$rfc=$_POST['rfc'];
$curp=$_POST['curp'];
$nss=$_POST['nss'];
$irl=$_POST['irl'];
$jor=$_POST['jor'];
$tis=$_POST['tis'];
$eje=$_POST['eje'];
$pue=$_POST['pue'];
$dep=$_POST['dep'];
$sbc=$_POST['sbc'];
$sd=$_POST['sd'];
$est=$_POST['est'];
$fes=$_POST['fes'];

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

$img= addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

$sql="INSERT INTO empleados VALUES('$id','$nombre','$rfc','$curp','$nss','$irl','$jor','$tis',
'$eje','$pue','$dep','$sbc','$sd','$est','$fes','$img')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: alumno.php");
    
}else {
}
?>