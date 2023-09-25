<?php 
session_start();


$errors = array();

if (isset($_POST['usuario']) and isset($_POST['password'])) {
	# code...
	include('conexion.php');
	$usuario = mysqli_real_escape_string($connect,$_POST['usuario']);
	$contrasena = mysqli_real_escape_string($connect,$_POST['clave']);
	$rol = "gerente";

	$query = 'SELECT * FROM acceso WHERE usuario="'.$usuario.'" and  clave="'.$contrasena.'"';
	$res = $connect->query($query);

	if ($row = mysqli_fetch_array($res)) {
		# code...
		if ($row["password"] == $contrasena) {
			# code...
			$_SESSION["k_Id_Nombre"] = $row['usuario'];
			$_SESSION["k_Password"] = $row['clave'];
			
			header('Location: formreg.html');
		}else{

			echo"
			<script>
				alert('Password incorrecto');
				document.location='index.html';
			</script>";
			exit();

		}

	}else{
		echo"
			<script>
				alert('Usuario incorrecto');
				document.location='index.html';
			</script>";
			exit();
	}
	mysqli_free_result($res);

}else{
	echo"
			<script>
				document.location='menu.html';
			</script>";
			exit();
}



mysqli_close($connect);

?>