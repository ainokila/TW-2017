<?php

	function comprueba($nombre,$objeto){
		$state_nombre = false;
		$state_objeto = false;

		if(strlen($nombre)>0){
			$state_nombre = true;
		}

		if($objeto == "camisa" || $objeto == "pantalon" || $objeto == "falda"){
			$state_objeto = true;
		}


		return $state_objeto && $state_nombre;
	}


	if(isset($_POST['nombre']) && isset($_POST['objeto']) ){
		$nombre = $_POST['nombre'];
		$objeto = $_POST['objeto'];
		if(comprueba($nombre,$objeto)){

			setcookie("nombre",$nombre,time()+3600);
			setcookie("objeto",$objeto,time()+3600);

			header("Location: /talla.php");
			die();


		}else{

		}
	}



?>

<!DOCTYPE html>
<html>
<head>
	<title>Compra</title>
</head>
<body>
	
	<form action="/index.php" method="post">
		<label>Nombre:</br>
		<input type="text" name="nombre"/></label></br>


		
		<label>Objeto a comprar:</br>
				<select name="objeto">
					<option value="camisa">Camisa</option>
					<option value="pantalon">Pantalón</option>
					<option value="falda">Falda</option>
				</select>
		</label></br>

		<input type="submit" name="Validar">

	</form>
	

</body>
</html>