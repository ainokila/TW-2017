<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Ejemplo PHP</title>
		<style type="text/css">
			table,tr,th{
				    border: 1px solid black;
    				border-collapse: collapse;
    				border: auto;
			}
			.sin-negrita{
				font-weight: normal;
			}
		</style>
	</head>
	<body>
	<?php
	$navega = array(array("NAV" => "Chrome", "AUTOR" => "Google", "LICENCIA" => "BSD","MOTOR" => "Blink"),
					array("NAV" => "Internet Explorer", "AUTOR" => "Microsoft", "LICENCIA" => "privativo","MOTOR" => "Trident"),
					array("NAV" => "Mozilla Firefox", "AUTOR" => "Fundación Mozilla", "LICENCIA" => "GNU GPL","MOTOR" => "Gecko"),
					array("NAV" => "Opera", "AUTOR" => "Opera Software", "LICENCIA" => "privativo","MOTOR" => "Blink"),
					array("NAV" => "Safari", "AUTOR" => "Apple", "LICENCIA" => "privativo","MOTOR" => "Webkit"));?>

	<table style="">
		<tr>
			<th> Navegador</th>
			<th> Autor</th>
			<th> Licencia</th>
			<th> Motor </th>
		</tr>

		<?php
		foreach($navega as $dato){

			$auxiliar = array_values($dato);
			echo "<tr>";

			foreach (range(0,3) as $posicion) {
				echo "<th class='sin-negrita'> $auxiliar[$posicion] </th>";
			}

			echo "</tr>";
		}?>

	</table>
	</body>
</html>