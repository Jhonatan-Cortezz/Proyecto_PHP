<?php 
		session_start();
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Zona de acceso Restringido</title>
 </head>
 <body>
 	<?php 
 		if (isset($_POST['usuario']) and isset($_POST['clave'])) {
 			# code...
 			if ($_POST['usuario'] == "" or $_POST['clave'] == "") {
 				# code...
 				echo "por favor completar usuario y clave";
 			} elseif($_POST['usuario'] == "Pepe" && $_POST['clave'] == "123456") {
 				# code...
 				//si son correctos los datos los colocamos en variables de sesion
 				$_SESSION["usuario"] = $_POST['usuario'];
 				$_SESSION["clave"] = $_POST['clave'];
 				echo "Usted se ha identificado como: ".$_SESSION['usuario'];
 			} else{
 				echo "Usuario y contraseña incorrecto";
 			}
 			
 		} else {
 			# code...
 			
 		}
 		

 	 ?>


 	 <div id="menu">
 	 	<ul>
 	 		<li><a href="primerintera.php">Primera pagina privada</a></li>
 	 		<li><a href="segunda.php">Segunda pagina privada</a></li>
 	 		<li><a href="tercera.php">Tercera pagina privada</a></li>
 	 	</ul>
 	 </div>

 	 <div id="formulario">
 	 	<form name="acceso" action="index.php" method="post">
 	 		<fieldset>
 	 			<legend>Ingrese sus datos de acceso</legend>
 	 			<label for="usuario">Su usuario:</label>
 	 			<input type="text" name="usuario" id="usuario">
 	 			<br>
 	 			<label for="clave">Su contraseña:</label>
 	 			<input type="text" name="clave" id="clave">
 	 			<br>
 	 			<input type="submit" id="ingresar" name="ingresar" value="Ingresar">
 	 		</fieldset>
 	 	</form>
 	 </div>
 </body>
 </html>