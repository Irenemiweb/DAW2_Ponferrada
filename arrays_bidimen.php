<!doctype html>
<html lang="es">
	<head>		
		<meta charset="utf-8"/>
		<title> Titulo </title>		
	</head>
	<body>

	<?php
		
		# tablas, arrays de dos dimensiones

		# no se da un tamaño en su creacion
		$v[0][0]=5;
		$v[0][1]=6;
		$v[1][0]=2;
		$v[1][1]=7;
		
		# el primer for recorre las filas
		for($i=0;$i<=1;$i++){
			# el segundo for las columnas
			for($j=0;$j<=1;$j++){
				echo "<br/>".$v[$i][$j];
			}
		}	
	?>
	</body>
</html>
