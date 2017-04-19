<?php

	if(isset($_GET["p"])){
		include "plantillas/inicio.html";
		include "plantillas/cabecera.html";

		switch ($_GET["p"]) {
			case "presentacion":
				include "plantillas/presentacion.html";
				break;

			case "curriculum":
				include "plantillas/curriculum.html";
				break;
			
			case "aficiones":
				include "plantillas/aficiones.html";
				break;

			case "contacto":
				include "plantillas/contacto.html";
				break;

			default:
				include "plantillas/presentacion.html";
				break;
		}
		include "plantillas/footer.html";
		include "plantillas/fin.html";

	}else{

		include "plantillas/inicio.html";
		include "plantillas/cabecera.html";
		include "plantillas/contacto.html";
		include "plantillas/footer.html";
		include "plantillas/fin.html";
	}

?>