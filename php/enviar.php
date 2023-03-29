<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php 
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$edad= $_POST['edad'];
	$email = $_POST['email'];
	$asunto = 'Formulario Rellenado';
	$mensaje = "Nombre: ".$nombre."\nApellido: ".$apellido."\nEdad: ".$edad."\n Email: $email\n Mensaje:".$_POST['mensaje'];


	if(mail('ferescervantesg@gmail.com', $asunto, $mensaje)){
		echo "Correo enviado";
	}
 ?>

 <a href="https://rent-icam.000webhostapp.com/">De regreso</a>

</body>
</html>