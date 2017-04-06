<?php 

	if(isset($_GET["boton"])){

		$errores = [];

		$nombre = NULL;
		$apellidos = NULL;
		$cod_postal = NULL;
		$fecha_nacimiento = NULL;
		$telefono = NULL;
		$email = NULL;
		$cc = NULL;

		$suscribe = NULL;
		$tiposuscribe = NULL;
		$tipopago = NULL;

		$otros = NULL;
		$publicidad = NULL;

		gestionDato("nombre",$nombre,"Debe rellenar su nombre",$errores);
		gestionDato("apellidos",$apellidos,"Debe rellenar sus apellidos",$errores);
		gestionDato("codPostal",$cod_postal,"Debe rellenar su codigo postal",$errores);
		gestionDato("fecha_nacimiento",$fecha_nacimiento,"Debe rellenar su fecha de nacimiento",$errores);
		gestionDato("telefono",$telefono,"Debe rellenar su telefono",$errores);
		gestionDato("email",$email,"Debe rellenar su email",$errores);
		gestionDato("cc",$cod_postal,"Debe rellenar su codigo de cuenta",$errores);

		gestionDato("suscribe",$suscribe,"Debe seleccionar una revista",$errores);
		gestionDato("tiposuscribe",$tiposuscribe,"Debe rellenar su tipo de suscripcion",$errores);
		gestionDato("tipopago",$tipopago,"Debe seleccionar tipo de pago",$errores);

		gestionDato("otros",$otros,"Debe seleccionar otros intereses",$errores);
		gestionDato("publicidad",$publicidad,"Selecciona si quiere recibir publicidad",$errores);

		if(count($errores)==0){

			header("Location: perfecto.html");
			die();
		}

	}






	function gestionDato($variable_nombre,&$variable,$texto_error,&$errores){
		if(isset($_GET[$variable_nombre])){
			$variable=$_GET[$variable_nombre];
		}else{
			array_push($errores, $texto_error);
		}
	}

	function comprueba($variable){
		if(isset($_GET["boton"])){
			if(isset($_GET[$variable])){
				echo $_GET[$variable];
			}
		}
	}

	function compruebaFecha(){
		
	}

 ?>


 <!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">

		<title>Suscripcion a revista</title>

		<style type="text/css">
			ul{
				border-left:30%;
				border-right: 30%;
				padding-left: 40%;
				border: 3px solid red;
			}
		</style>
	</head>

	<body>
		<?php
			if(isset($_GET["boton"])){
				echo "<ul>";
				foreach ($errores as $error) {
					echo "<li> $error </li>";
				}
				echo "</ul>";
			}

		?>
		<article>
		<form action="/procesa.php" method="get">

			<h1>Suscripcion a revista</h1>
			<fieldset>
				<legend> Datos personales </legend>

				<label>Nombre:</br>
				<input type="text" name="nombre" value="<?php comprueba("nombre")?>" /></label></br>

				<label>Apellidos:</br>
				<input type="text" name="apellidos" value="<?php comprueba("apellidos")?>""/></label></br>

				<label>Dirección Postal:</br>
				<input type="number" name="codPostal" value="<?php comprueba("codPostal")?>"/></label></br>

				<label>Fecha nacimiento:</br>
				<input type="date" name="fecha_nacimiento"/></label></br>

				<label>Telefono:</br>
				<input type="tel" name="telefono"/></label></br>

				<label>Email:</br>
				<input type="email" name="email"/></label></br>

				<label>Número CC:</br>
				<input type="text" name="cc"/></label></br>
			</fieldset>

			<fieldset>
				<legend>Información sobre la suscripción</legend>

				<label>Revista seleccionada:</br>
					<select name="suscribe">
						<option>Sabelotodo</option>
						<option value="solosequenosenada">Solo sé que no sé nada</option>
						<option value="muyinteresado">Muy interesado</option>
						<option value="cienciaconsabor">Ciencia con sabor</option>
					</select>
				</label></br>

				<label>Tipo suscripción</br>
					<input type="radio" name="tiposuscribe" value="anual"/>Anual</br>
					<input type="radio" name="tiposuscribe" value="bianual"/>Bianual</br>
				</label>

				<label>Modo pago</br>
					<input type="radio" name="tipopago" value="paypal"/>Paypal</br>
					<input type="radio" name="tipopago" value="visa"/>Visa</br>
					<input type="radio" name="tipopago" value="rembolso"/>Rembolso</br>
				</label>
	

			</fieldset>

			<fieldset>
				<legend>Otra información</legend>

				<label>Temas de interés:</br>
					<input type="checkbox" name="otros" value="divulgacion"/>Divulgación</br>
					<input type="checkbox" name="otros" value="gastronomia"/>Gastronomía</br>
					<input type="checkbox" name="otros" value="motor"/>Motor</br>
					<input type="checkbox" name="otros" value="viajes"/>Viajes</br>
				</label>

				<label>¿Acepta recibir publicidad?</br>
					<input type="radio" name="publicidad" value="si"/>Si</br>
					<input type="radio" name="publicidad" value="no"/>No</br>
				</label>

			</fieldset>

			<input type="submit" name="boton" value="Enviar datos"/>
			<input type="reset" value="Limpiar formulario"/>
		</form>
		</article>

	</body>

</html>