<?php 
	#Jhonatan Alexander Cortez Amaya 
	if (isset($_POST['txtNameUser']) && isset($_POST['selectSex']) && isset($_POST['selectPais'])
		&& isset($_POST['selectDeporte']) && isset($_POST['selectEstudio'])) {
		# code...
		$nomreUsuario = $_POST['txtNameUser'];
		$apellidos =$_POST['txtApellidos'];
		$direccion = $_POST['txtDireccion'];
		$telefono = $_POST['txtTelefono'];
		$sexo= $_POST['selectSex'];
		$pais = $_POST['selectPais'];
		$deporte = $_POST['selectDeporte'];
		$estudio = $_POST['selectEstudio'];
		echo <<<EOT
			<style>
				div{
					margin-left: auto;
					margin-right: auto;
					width: 50%;
					background: silver;
					text-align: center;
					font-size: 1.5em;
				}
			</style>
		EOT;
		echo "<div>";
		echo "Se ha creado el registro<br>";
		echo <<<EOT
			Nombre:  $nomreUsuario;<br>
			Apellido: $apellidos;<br>
			Dirección: $direccion;<br>
			Telefono: $telefono;<br>
			Sexo: $sexo;<br>
			Pais: $pais;<br>
			Deporte: $deporte;<br>
			Nivel de estudio: $estudio;<br>
		EOT;
		echo "</div>";
	} else {
		echo "No se ha creado el registro";
	}
 ?>