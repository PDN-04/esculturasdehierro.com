<?php
	$datos = $_POST['data'];

	$dato = explode("&", $datos);

 	$arrayNombre = explode('=', $dato[0]);
 	$arrayEmail = explode('=', $dato[1]);
 	$arrayMensaje = explode('=', $dato[2]);

	if (!strpos($datos, "error")) {
		$nombre = $arrayNombre[1];
		$email = $arrayEmail[1];
		$mensaje = $arrayMensaje[1];

		$para = 'dominguezgomezjc@gmail.com';
		
		$titulo = 'Esculturas en Hierro ¡Tienes un mensaje!';
	 
		$contenido = "
		<html>

		<head>
			<style>
				.contenido {
					text-align: center;
	    			border: 1px solid #333;
				}
				.cabecera {
					background-color: #333;
	    			color: #fff;
	    			padding: 20px;
	    			margin: 0;
				}
				.titulo {
					font-size: 30px;
				}
				.subtitulo {
					font-size: 15px;
				}
				.cuerpo {
					padding: 50px;
	    			margin: 0;
	    		}
	    		.pie {
	    			margin: 0;
	    			padding: 20px;
	    		}
			</style>
		</head>

		<body>
		    <div class='contenido'>
			    <p class='cabecera'>
			    	<span class='titulo'>Mensaje de " . $nombre . "</span><br>
			    	<span class='subtitulo'>Esculturas en Hierro</span>
			    </p>
			    <p class='cuerpo'>"
			    	. $mensaje . 
			    "</p>
			    <p class='pie'>
			    	- Correo electrónico: " . $email . " 
			    </p>
		    </div>
		</body>

		</html>";

		$cabeceras = 'MIME-Version: 1.0' . "\r\n";
		$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
		$cabeceras .= "De: " . $nombre . "<" . $email . ">";
		mail($para, $titulo, $contenido, $cabeceras);
	}
?>