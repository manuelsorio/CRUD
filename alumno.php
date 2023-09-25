<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM empleados";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> CRUD </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST" enctype="multipart/form-data">

                                    <input type="text" class="form-control mb-3" name="id" placeholder="Nº DE EMPLEADO">
                                    <input type="text" class="form-control mb-3" name="nom" placeholder="NOMBRE">
                                    <input type="text" class="form-control mb-3" name="rfc" placeholder="RFC">
                                    <input type="text" class="form-control mb-3" name="curp" placeholder="CURP">
                                    <input type="text" class="form-control mb-3" name="nss" placeholder="NSS">
                                    <input type="text" class="form-control mb-3" name="irl" placeholder="INICIO DE RELACION LABORAL">
                                    <input type="text" class="form-control mb-3" name="jor" placeholder="JORNADA">
                                    <input type="text" class="form-control mb-3" name="tis" placeholder="TIPO DE SALARIO">
                                    <input type="text" class="form-control mb-3" name="eje" placeholder="EJERCICIO">
                                    <input type="text" class="form-control mb-3" name="pue" placeholder="PUESTO">
                                    <input type="text" class="form-control mb-3" name="dep" placeholder="DEPARTAMNETO">
                                    <input type="text" class="form-control mb-3" name="sbc" placeholder="SUELDO BASE">
                                    <input type="text" class="form-control mb-3" name="sd" placeholder="SUELDO DIARIO">
                                    <input type="text" class="form-control mb-3" name="est" placeholder="ESTATUS">
                                    <input type="text" class="form-control mb-3" name="fes" placeholder="FECHA DE SALIDA">
                                    <input class="controls" type = "file" accept="image/*"name="iimagen" action="subir.php" placeholder="IMAGEN">
                                    
                                    <input type="submit" name="guardar"class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Nº EMPLEADO</th>
                                        <th>NOMBRE</th>
                                        <th>RFC</th>
                                        <th>CURP</th>
                                        <th>NSS</th>
                                        <th>IRL</th>
                                        <th>JORNADA</th>
                                        <th>TIP SALARIO</th> 
                                        <th>EJERCICIO</th>
                                        <th>PUESTO</th>
                                        <th>DEPARTAMENTO</th>
                                        <th>SBC</th>
                                        <th>SD</th>
                                        <th>ESTATUS</th>
                                        <th>FECHA DE SALIDA</th>
                                        <th>IMAGEN</th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                       



                                            while($data=mysqli_fetch_array($query)){ 
                                              
                                        ?>
                                            <tr>
                                                <th><?php  echo $data['idempleados']?></th>
                                                <th><?php  echo $data['nombre']?></th>nj
                                                <th><?php  echo $data['rfc']?></th>
                                                <th><?php  echo $data['curp']?></th> 
                                                <th><?php  echo $data['nss']?></th>
                                                <th><?php  echo $data['inirellab']?></th>
                                                <th><?php  echo $data['jornada']?></th>
                                                <th><?php  echo $data['tipsalario']?></th>   
                                                <th><?php  echo $data['ejercicio']?></th>
                                                <th><?php  echo $data['puesto']?></th>
                                                <th><?php  echo $data['departamento']?></th>
                                                <th><?php  echo $data['sbs']?></th>  
                                                <th><?php  echo $data['sd']?></th>
                                                <th><?php  echo $data['estatus']?></th>
                                                <th><?php  echo $data['fechadesalida']?></th>
                                                <th><img height="50px" src="/CRUD/imagenes/<?php  echo base64_encode($data['imagen'])?>"></th> 
                                                <th><a href="actualizar.php?id=<?php echo $data['idempleados'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $data['idempleados'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                                   
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>