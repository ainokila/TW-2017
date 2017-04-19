<?php

	function comprueba($talla){
		if($talla>30 && $talla<50){
			return true;
		}else{
			return false;
		}
	}


	if(isset($_COOKIE['nombre']) && isset($_COOKIE['objeto'])){
		if(isset($_POST['talla']) && isset($_POST['color'])){

			$talla = $_POST['talla'];
			$color = $_POST['color'];

			if(comprueba($talla)){
				setcookie("talla",$talla,time()+3600);
				setcookie("color",$color,time()+3600);

				header("Location: /valida.php");
			}else{
				echo '<h1>Error</h1>';
			}
		}

	}else{
		header("Location: /index.php");

	}



?>


<!DOCTYPE html>
<html>
<head>
	<title>Compra</title>
</head>
<body>
	
	<form action="/talla.php" method="post">

		<label>Talla:</br>
			<input type="number" name="talla"/></label></br>


		
		<label>Color:</br>
				<select name="color">
					<option value="rojo">Rojo</option>
					<option value="verde">Verde</option>
					<option value="azul">Azul</option>
				</select>
		</label></br>

		<input type="submit" name="Continuar">

	</form>
	

</body>
</html>
