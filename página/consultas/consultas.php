<!DOCTYPE html>
<html lang="es">
<head>
	<title>Pagina web</title>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" href="../style.css?v=<?php echo time(); ?>" />
	<link rel="stylesheet" href="../styleConsultas.css?v=<?php echo time(); ?>" />	

</head>
<body onunload="idleLogout()">

<?PHP
session_start();
include("../inserciones/inactividadJS.html");
include("../conexion.php");
conectar();
?>
<header>
<div class="logo" onclick="location.href='../menu_administrador.php'"></div>
	<div class="header_left">
	<?php 
		
		crear_boton("Cerrar Sesion" , "../cerrar_sesion.php" ,"boton_header");		
	?>
	<div>	
</header>


<nav>
	<?php 
		nav_administrador_consultas();
 	?>
</nav>
<section>

	<p class="mensaje">Elija la tabla <br> que desea consultar</p>

	<form class="consulta"  action="" method="post">
	<select name ="tabla" required>
    <option value="empleado">Empleado</option>
    <option value="contrato">Contrato</option>
    <option value="telefono">Telefono</option>
    <option value="factura">Factura</option>
    <option value="cliente">Cliente</option>
 	</select>
 	<br>
	<input type="submit" value="Seleccionar" name="submit2">		
	</form>
	
	
	<?php 
		if(isset($_POST['submit2'])){		 //condicion para saber que ya se escogio la tabla
			$tabla=$_POST['tabla'];           //el post se hizo en la misma pagina al usar action vacio en el form

			
			echo '<div class="linea"></div>';			//clase de una linea de separacion
			
			$var1 = pg_query("select * from ".$tabla."");		//pg_query que se usara en posteriores funciones
			$type="checkbox";
			$name="consulta[]";
			$type2="mensaje";
			$type3="text";
			$container="container";	

			echo "<p class=".$type2.">Datos posibles a consultar <br> en la tabla de ".$tabla."</p>";
			echo '<p class="mensaje2">Si desea ver todos los campos de la tabla <br> solo elija la opcion <b>TODOS</b> que se encuentra al final.</p>';							
	
			echo'<div class="check">';								//se hace un nuevo form para los nuevos datos de consultas
			
			
			echo' <form class="form_consulta"  action="" method="POST">';
			
			echo '<table class="consulta_check">';						//se empieza estructura de la tabla que se aumentara en los ciclos
			echo "<tr>";
			for ($i=0; $i<pg_num_fields($var1) ; $i++) { 		 //el for es para hacer un checkbox dinamico sobre los campos a consultar
				$var2=pg_field_name ($var1 , $i );			//las dos funciones pg sirven para traer el nombre de todos las filas
				echo "<td><label class=".$container.">".$var2;
				echo "<input type=".$type." name=".$name." value=".$var2.">";
				echo "<br>";

				echo '<span class="checkmark"></span></label></td>';
				
				

				if ($i%2==0){ 
				 	echo "</tr><tr>"; 
				} 
				else{

				}
			};
			echo "</tr>";
			echo "<tr>";
			echo "<td>";
			echo '<label class="container">Todos';
			echo '<input type="checkbox" name="consulta[]" value="*">';
			echo '<span class="checkmark"></span></label>';
			echo "</td>";
			echo "</tr>";
			echo "</table>";

			$type="hidden";	
			$name="tabla";										//input hidden para llevar el dato de la tabla a la otra parte del php

			echo "<input type=".$type." value=".$tabla." name=".$name." >";
			echo "<br>";
    		echo '<input type="submit" value="Seleccionar" name="submit1">  
    		</div>
    		</form>';											//submit segundo formulario


	}else if(isset($_POST['submit1'])){				//se ejecuta cuando ya se eligieron los campos que se quieren consultar
			$tabla=$_POST['tabla'];
			$campos=$_POST['consulta'];
			echo '<div class="linea"></div>';
    		consulta($tabla, $campos);			//la funcion consulta arma la tabla tomando como parametros la tabla y campos 

	}
	?>
	

</section>

<footer>
	<?php 
		footer_formularios();
 	?>
</footer>

<div class="barra">
	<p>Copyright ©2020 Todos los derechos reservados</p>
</div>

</body>
</html>