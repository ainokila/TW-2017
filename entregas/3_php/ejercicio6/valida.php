<!DOCTYPE html>
<html>
<head>
	<title>Valida datos</title>
</head>
<body>


<?php

	if(isset($_COOKIE['nombre']) && isset($_COOKIE['objeto']) && isset($_COOKIE['talla']) && isset($_COOKIE['color'])){
		echo "<p> {$_COOKIE['nombre']} compra {$_COOKIE['objeto']} de la talla {$_COOKIE['talla']} y color {$_COOKIE['color']}";
		setcookie("nombre", "value", time()-2592000);
		setcookie("objeto", "value", time()-2592000);
		setcookie("talla", "value", time()-2592000);
		setcookie("color", "value", time()-2592000);
	}else{
		header("Location: /talla.php");
	}

?>



</body>
</html>