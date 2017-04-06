<?php 

	if(isset($_POST["boton"]) && isset($_POST["isbn"])){
		$isbn = $_POST["isbn"];
		$curl = curl_init();
		curl_setopt_array($curl, array(
    		CURLOPT_RETURNTRANSFER => 1,
    		CURLOPT_URL => "http://www.worldcat.org/search?qt=worldcat_org&q=$isbn&submit=Search",
		));
		$result = curl_exec($curl);
		if (curl_errno($curl)){ 
   			header("Location: /buscador.html");
		}else{
			echo $result;
		}
		curl_close($curl);
		
	}else{
		header("Location: /buscador.html");

	}

?>
