<?php
$n=$_POST['n'];
$c=$_POST['c'];
$m=$_POST['m'];
if (isset($n) && isset($c) && isset($m)) {
	if (empty($n) && empty($c) && empty($m)) {
		# SI ESTA VACIO
		echo"<script> alert('Tiene que completar los campos'); location.href='./';</script>";
	}else{
		# NO ESTA VAIO
		$destinatario = "felixempres@gmail.com"; 
		$asunto = "Felix Blanco Site"; 
		$cuerpo = ' 
			<html> 
			<head> 
				<title>Felix Blanco</title> 
			</head> 
			<body> 
				<h1></h1> 
				<p style="font-size:20px;"> 
					Hola Felix, Soy <b>'.$n.'</b><br>
					<b>Mensaje:</b> '.$m.'					
				</p> 
			</body> 
		</html> 
		'; 

		//para el envío en formato HTML 
		$headers = "MIME-Version: 1.0\r\n"; 
		$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

		//dirección del remitente 
		$headers .= "From: Felix Blanco <felixempres@gmail.com>\r\n"; 

		//dirección de respuesta, si queremos que sea distinta que la del remitente 
		#$headers .= "Reply-To: mariano@desarrolloweb.com\r\n"; 

		//ruta del mensaje desde origen a destino 
		#$headers .= "Return-path: felixempres@gmail.com\r\n"; 

		//direcciones que recibián copia 
		#$headers .= "Cc: felixempres@gmail.com\r\n"; 

		//direcciones que recibirán copia oculta 
		#$headers .= "Bcc: pepe@pepe.com,juan@juan.com\r\n"; 

		mail($destinatario,$asunto,$cuerpo,$headers); //MANDAMOS EL CORREO

		echo"<script> alert('Mensaje Enviado'); location.href='./';</script>";
	}
}else{
	echo"<script> alert('Tiene que completar los campos'); location.href='./';</script>";
}


?>