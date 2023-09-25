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
$img=$_POST['img'];

$sql="UPDATE empleados SET  nombre='$nombre',rfc='$rfc',curp='$curp',nss='$nss',inirellab='$irl',jornada='$jor',tipsalario='$tis',
ejercicio='$eje',puesto='$pue',departamento='$dep',sbc='$sbc',sd='$sd',estatus='$est',fechadesalida='$fes',imagen='$img' WHERE idempleados='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: alumno.php");
    }
?>