<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>suma</title>
</head>
<body>

	<form action="suma.php" method="post">
		<center>
			<h1>Suma de dos numeros</h1>
			<p><input type="text" name="num1" placeholder="Captura el número 1" required="required">
			<p><input type="text" name="num2" placeholder="Captura el numero 2" required="required">
			<p><input type="email" name="correo" placeholder="Captura el correo electronico" required="required">
			<br><br>
			<input type="submit" value="enviar y sumar" name="enviar" class="btn btn-success">
		</center>
		
	</form><hr>
	<center>
		<<?php
			if (isset($_POST['enviar'])) {
				$num1=$_POST['num1'];
				$num2=$_POST['num2'];
				$correo=$_POST['correo'];
				$res =($num1 + $num2);
				echo "<h2>La suma de los número es: $res </h2>";
				if($res>0){
					echo "El resultado es positivo";
				}else{
					echo "El resultado es negativo";
				}
				echo "<h2>La cuenta de correo electronico es: $correo";
			 	# code...
			 } 
		 ?>
	</center>

</body>
</html>