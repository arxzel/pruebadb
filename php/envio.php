<?php
	include("conexiondb.php");
	$email = mysql_real_escape_string($_POST['correo']);
	$contrasenia = mysql_real_escape_string($_POST['contrasenia']);

	//echo "el usurio y la contraseña son ".$email." md5(".$contrasenia.")";

	$sql= "select nombre, apellidos from usuario where id_usuario = '".$email."' and password = '".$contrasenia."'";
	$resultado = mysqli_query($conexion, $sql);

	if(1== mysqli_num_rows($resultado)) //or die("no se ha encontrado nada");
	{
		$linea = mysqli_fetch_array($resultado);

		$nombre = $linea[0];

		$apellidos = $linea[1];

		echo "bienvenido ".$nombre." ".$apellidos;

		//header("pagina/a/direccionar.format");
	}else{
		header("location: ../");
		echo "ha ocurrido un error";
	}
?>