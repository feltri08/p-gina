<!DOCTYPE html>
<html lang="es">
<head>
	<title>Autentificacion</title>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" href="style.css?v=<?php echo time(); ?>" />  
	

</head>

<body >

<?PHP
include("inserciones/validacionJS.html");
include("conexion.php");
?>
<header>
	<div class="logo" onclick="location.href='inicio.php'"></div>
	<div class="header_left">
	<?php 
		crear_boton("Iniciar Sesion" , "valida.php" ,"boton_header");
		crear_boton("Registrarse" , "inserciones/clienteFormulario.php" ,"boton_header");		
	?>
	<div>
	
</header>


<nav>
	<?php 
		nav_principal();
 	?>
</nav>

<section class="section_valida">

<div class="imagen_valida">
</div>


<div class="section_formulario_valida">
		<form class="valida_form" action="valida_usuario.php" method="POST"> 
		<table class="valida_table"> 
			<tr> 
			<td colspan="2">
				<?php 
					if (isset($_GET["errorusuario"])=="si")
					{
				?> 
					<p>Datos incorrectos</p> 
				<?php
					}
					else
					{
				?> 
					<p>Iniciar Sesion</p>

				<?php 
					}
				?>
			</td> 
		</tr> 
		<tr> 
			<td >
				Usuario:
			</td> 
			<td>
				<select name = "tipo">
					<option value = "1">cliente
					<option value = "3">cliente_premium 
					<option value = "2">administrador						
				</select>
			</td> 
		</tr> 
		<tr> 
			<td >
				Cédula:
			</td> 
			<td>
				<input type="Text" name="cedula" size="8" maxlength="50" onkeypress="return numero(event)">
			</td> 
		</tr> 
		<tr> 
			<td>
				Nombre:
			</td> 
			<td>
				<input type="Text" name="nombre" size="8" maxlength="50" onkeypress="return letra(event)">
			</td> 
		</tr> 
		
		<tr> 
			<td colspan="2">
				<input class="submit_valida" type="Submit" value="ENTRAR">
			</td> 
		</tr> 
	</table> 
	</form>
	</div> 


</section>

<footer>
	<?php 
		footer_principal();
 	?>
</footer>

<div class="barra">
	<p>Copyright ©2020 Todos los derechos reservados</p>
</div>


</body>


</html> 
