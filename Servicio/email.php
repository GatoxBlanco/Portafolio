<?php 

//PARA DONDE VA 
$que_es=$_GET['para_donde'];


if ($que_es=="presupuesto") { // SI VIENE PARA EL FORMULARIO DE PRESUPUESTO
	
	$nombre=$_POST['n_e']; $correo=$_POST['correo']; $dominio=$_POST['dominio'];
	$espacio=$_POST['espacio']; $descripcion=$_POST['descripcion'];

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
					Hola Felix, Soy <b>'.$nombre.'</b><br>
					<b>Mensaje:</b> '.$descripcion.'<br><br>

					<ul>
						<li>Nombre de la Empresa o persona'.$nombre.'</li>
						<li>'.$dominio.' Dominio</li>
						<li>'.$espacio.' Espacio</li>					
						<li>'.$correo.'</li>
						<li>'.$descripcion.'</li>
					</ul>
				</p> 
			</body> 
		</html> 
		'; 

		//para el envío en formato HTML 
		$headers = "MIME-Version: 1.0\r\n"; 
		$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

		//dirección del remitente 
		$headers .= "From: Felix Blanco <felixempres@gmail.com>\r\n"; 

		mail($destinatario,$asunto,$cuerpo,$headers); //MANDAMOS EL CORREO

		echo"<script> alert('Mensaje Enviado'); location.href='./';</script>";

}elseif($que_es=="pregunta"){ // SI VIENE PARA EL FORMULARIO DE PREGUNTA
	#VARIABLES DE PREGUNTA
	$n=$_POST['n']; $c=$_POST['c']; $duda=$_POST['duda'];

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
					<b>Pregunta:</b> '.$duda.'<br><br>

					<ul>
						<li>Nombre de la Empresa o persona'.$n.'</li>
						<li>'.$c.' Dominio</li>
						<li>'.$duda.' Espacio</li>					
					</ul>
				</p> 
			</body> 
		</html> 
		'; 

		//para el envío en formato HTML 
		$headers = "MIME-Version: 1.0\r\n"; 
		$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

		//dirección del remitente 
		$headers .= "From: Felix Blanco <felixempres@gmail.com>\r\n"; 

		mail($destinatario,$asunto,$cuerpo,$headers); //MANDAMOS EL CORREO

		echo"<script> alert('Mensaje Enviado'); location.href='./';</script>";
}else{
	header("location:./");
}

?>