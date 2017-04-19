<?php

	if(count($_POST) > 0){
		if(isset($_POST['user']) && isset($_POST['pass'])){
			if($_POST['user']=="admin" && $_POST['pass']=="pass"){
				echo "login OK";
			}
		}
	}else{

		echo "Mal";
	}










?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Usuario</title>
</head>
<body>

		<article id="sesion">
			<h2>Inicio sesión</h2>
			<div class="interior">
			<form action="/login.php" method="post">

				<label>Usuario:</br>
				<input type="text" name="user"></label></br>
				<label>Contraseña:</br>
				<input type="password" name="pass"></label></br>

				<input type="submit" value="Enviar"/>
				<input type="reset" value="Limpiar"/>

			</form>
			</div>
		</article>

</body>
</html>