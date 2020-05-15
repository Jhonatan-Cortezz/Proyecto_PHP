<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro de usuarios</title>
</head>
<body>
	<form action="capturar1.php" method="post">
		<label for="">Nombre del usuario</label>
		<input type="text" name="txtNameUser" id="txtNameUser"><br>
		<label for="">Apellidos</label>
		<input type="text" name="txtApellidos" id="txtApellidos"><br>
		<label for="">Dirección</label>
		<input type="text" name="txtDireccion" id="txtDireccion"><br>
		<label for="">Teléfono</label>
		<input type="text" name="txtTelefono" id="txtTelefono"><br>
		<label for="">Sexo:</label>
		<select name="selectSex" id="selectSex">
			<option value="Masculino">Masculino</option>
			<option value="Femenino">Femenino</option>
		</select><br>
		<label for="">Pais:</label>
		<select name="selectPais" id="selectPais">
			<option value="EL Salvador">EL Salvador</option>
			<option value="Estados Unidos">Estados Unidos</option>
			<option value="China">China</option>
			<option value="Brazil">Brazil</option>
			<option value="Alemania">Alemania</option>
		</select><br>
		<label for="">Deporte que practica:</label>
		<select name="selectDeporte" id="selectDeporte">
			<option value="Futboall">Futboall</option>
			<option value="Baloncesto">Baloncesto</option>
			<option value="Tenis">Tenis</option>
			<option value="Ping Pong">Ping Pong</option>
			<option value="Tiro al Blanco">Tiro al Blanco</option>
		</select><br>
		<label for="">Nivel de Estudio:</label>
		<select name="selectEstudio" id="selectEstudio">
			<option value="Basico">Basico</option>
			<option value="Intermedio">Intermedio</option>
			<option value="Superior">Superior</option>
		</select><br>
		<input type="submit" value="Crear Registro">
	</form>
</body>
</html>