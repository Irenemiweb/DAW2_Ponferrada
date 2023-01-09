<!doctype html>
<html lang="es">
	<head>		
		<meta charset="utf-8"/>
		<title> Titulo </title>		
	</head>		
	<body>
		<?php 
			$v;
			# arrays escalres, una dimensión, se laman vectores
			$v=array();
			
			# añade al final
			$v[]=2;
			$v[]=5;
			
			$v[]={2,5,8};
			
			#recorrido de un array
			for($i=0;$i<count($v);$i++){
				echo $v[$i];
				echo "<br/>";
			}	
			# instruccion sencilla para pruebas no tener q hacer for
			print_r($v);
			
			# un array asociativo (tabla hash en otros lenguajes) es
			# un array que utiliza como indice un valor no numérico y no repetible
			$v['paco']='ponferrada';
			$v['luis']='vigo';
			/*
			recorrido completo de un array asociativo, en cada
			iteración mete en $clave el indice y en 
			*/
			foreach($v as $clave=> $valor){
				echo "Clave: $clave Valor: $valor <br/>";
			}
			
		?>	
	</body>
</html>