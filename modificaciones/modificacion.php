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
include("../inserciones/validacionJS.html");
include("../inserciones/inactividadJS.html");
include("../conexion.php");
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
		nav_administrador_modificar();
 	?>
</nav>
<section class="section_alter">

	<p class="mensaje">Elija la tabla <br> que desea modificar </p>
	
	<form class="consulta"  action="" method="post">
	<select name ="tabla">
    <option value="empleado">Empleado</option>
    <option value="contrato">Contrato</option>
    <option value="telefono">Telefono</option>
    <option value="factura">Factura</option>
    <option value="cliente">Cliente</option>
 	</select>
 	<br>
 	<p class="mensaje2"> y el codigo de la fila</p>
 	<INPUT type="text" name="codigo" maxlength="10" onkeypress="return numero(event)"/>
 	<br>
	<input type="submit" value="Seleccionar" name="submit">		
	</form>

	<?php 
		if(isset($_POST['submit'])){
		$tabla=$_POST['tabla'];
		$codigo=$_POST['codigo'];
		conectar();
		
		switch ($tabla) {
			case 'empleado':
					$sql1="select * from empleado where ide='".$codigo."'";
				break;

			case 'contrato':
					$sql1="select * from contrato where idco='".$codigo."'";
				break;

			case 'telefono':
					$sql1="select * from telefono where idt='".$codigo."'";
				break;

			case 'factura':
					$sql1="select * from factura where idf='".$codigo."'";
				break;

			case 'cliente':
					$sql1="select * from cliente where cedula='".$codigo."'";
				break;
			
			default:
					echo ("error switch");
				break;
		}

				$result1 = pg_query(conectar(),$sql1);
				$numrows5 = pg_numrows($result1);

		if  ($numrows5!=0) 
					{
						
						echo '<div class="linea"></div>';
						echo "<form name='form1' ACTION='modificar.php' METHOD='POST'>";
						echo '<table class="modificacion_table">';						
						echo "<tr>";
						for ($i=0; $i<pg_num_fields($result1) ; $i++) { 		
									$var2=pg_field_name ($result1 , $i );			
									echo "<th>".$var2."</th>";
					    		}
					    		"</tr>";												

						while ($row = pg_fetch_array($result1)) {						
					    
					    		
					    		$text="text";	
					    		$disabled="disabled";	
					    		$i=0;
					    		$type2="mensaje";
					    		$hidden="hidden";
					    		$fields="fields";
					    		$nombre="nombre[]";
					    		$tabla2="tabla2";
					    		$tabla3="clave";

					    		if($tabla=="empleado")
					    			{
					    				$input="input_dos";
					    			}else{
					    				$input="input_uno";
					    			};

					    		echo "<p class=".$type2.">Modificando <br> la tabla de ".$tabla."</p>";    
					    		echo "<tr>";			

					    		echo "<td> <input class=".$input." type=".$text."  disabled=".$disabled." value=".$row[$i]." </td>";
					    		echo"<input type=".$hidden." name=".$tabla3." value=".$row[$i].">";

					    		

					    		for ($i=1; $i<pg_num_fields($result1) ; $i++) {

					    			
		    						echo "<td> <input input class=".$input." type=".$text."  name=".$nombre." value=".$row[$i]." </td>";
		    					
					    		}

					    		echo "</tr>";

					    		$var5=pg_num_fields($result1);
					    		echo"<input type=".$hidden." name=".$fields." value=".$var5.">";
					    		echo"<input type=".$hidden." name=".$tabla2." value=".$tabla.">";
					    		

					    		 		
					    }

					    echo "</table>";

					    echo'<input value="Modificar" type="submit" name="submit1">';
						echo "</form>";



					}
					else
					{
						echo ("no ahi datos");
					}		

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