<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM empleados WHERE idempleados='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="idempleado" value="<?php echo $row['idempleados']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="id" placeholder="ID" value="<?php echo $row['idempleados']  ?>">
                                <input type="text" class="form-control mb-3" name="nom" placeholder="NOMBRE" value="<?php echo $row['nombre']  ?>">
                                <input type="text" class="form-control mb-3" name="rfc" placeholder="RFC" value="<?php echo $row['rfc']  ?>">
                                <input type="text" class="form-control mb-3" name="curp" placeholder="CURP" value="<?php echo $row['curp']  ?>">
                                <input type="text" class="form-control mb-3" name="nss" placeholder="NSS" value="<?php echo $row['nss']  ?>">
                                <input type="text" class="form-control mb-3" name="irl" placeholder="IRL" value="<?php echo $row['inirellab']  ?>">
                                <input type="text" class="form-control mb-3" name="jor" placeholder="JORNADA" value="<?php echo $row['jornada']  ?>">
                                <input type="text" class="form-control mb-3" name="tis" placeholder="TIPO DE SALARIO" value="<?php echo $row['tipsalario']  ?>">
                                <input type="text" class="form-control mb-3" name="eje" placeholder="EJERCICIO" value="<?php echo $row['ejercicio']  ?>">
                                <input type="text" class="form-control mb-3" name="pue" placeholder="PUESTO" value="<?php echo $row['puesto']  ?>">
                                <input type="text" class="form-control mb-3" name="dep" placeholder="DEPARTAMENTO" value="<?php echo $row['departamento']  ?>">
                                <input type="text" class="form-control mb-3" name="sbc" placeholder="SUELDO BASE" value="<?php echo $row['sbc']  ?>">
                                <input type="text" class="form-control mb-3" name="sd" placeholder="SUELDO DIARIO" value="<?php echo $row['sd']  ?>">
                                <input type="text" class="form-control mb-3" name="est" placeholder="ESTATUS" value="<?php echo $row['estatus']  ?>">
                                <input type="text" class="form-control mb-3" name="fes" placeholder="FECHA DE SALIDA" value="<?php echo $row['fechadesalida']  ?>">
                                <input type="file" class="form-control mb-3" name="img" placeholder="IMAGEN" value="<?php echo base64_encode($row['imagen'])?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>