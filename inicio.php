<!DOCTYPE html>
<html lang="es">
<head>
	<title>Pagina web</title>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" href="style.css?v=<?php echo time(); ?>" />  
	

</head>
<body>

<?PHP
include("conexion.php");
include("funcionesJS.html");

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
<section class="section_principal">

	<div class="box"><p>NUEVAS TECNOLOGIAS</p>
		<p class="texto">Los productos mas recientes al mejor precio <br> registrate ahora y busca tu nuevo smartphone </p>
		<?php 
		crear_boton("Registrarse" , "inserciones/clienteFormulario.php" ,"boton_registro");
		 ?>


	</div>

	<div class="section_contenido">

		<p class="titulo_section">Celulares</p>
	
		<div class="fila_telefonos">
			<div class="telefono" onclick="datosTelefono()">
								<img src="imagenes/huaweimate30.png">
								<p class="nombre_telefono"><?php echo datoscelular("1" , "1") ?></p>
								<p class="precio">$<?php echo  datoscelular("1" , "3") ?></p>							 
			</div>

			<div class="telefono" onclick="datosTelefono()">
								<img src="imagenes/motoe5.png">
								<p class="nombre_telefono"><?php echo datoscelular("3" , "1") ?></p>
								<p class="precio">$<?php echo  datoscelular("3" , "3") ?></p>							
			</div>

			<div class="telefono" onclick="datosTelefono()">
							    <img src="imagenes/huaweip20.png">
								<p class="nombre_telefono"><?php echo datoscelular("2" , "1") ?></p>
								<p class="precio">$<?php echo  datoscelular("2" , "3") ?></p>				
			</div>

			<div class="telefono"  onclick="datosTelefono()">
								<img src="imagenes/huaweip30.png">
								<p class="nombre_telefono"><?php echo datoscelular("8" , "1") ?></p>
								<p class="precio">$<?php echo  datoscelular("8" , "3") ?></p>
			</div>	
		</div>

		<div class="fila_telefonos2">
			<div class="telefono" onclick="datosTelefono()">
								<img src="imagenes/nokia71.png">
								<p class="nombre_telefono"><?php echo datoscelular("4" , "1") ?></p>
								<p class="precio">$<?php echo  datoscelular("4" , "3") ?></p>
			</div>

			<div class="telefono" onclick="datosTelefono()">
								<img src="imagenes/motoe6.png">
								<p class="nombre_telefono"><?php echo  datoscelular("5" , "1") ?></p>
								<p class="precio">$<?php echo  datoscelular("5" , "3") ?></p>
			</div>

			<div class="telefono" onclick="datosTelefono()">
								<img src="imagenes/xiamiredminote.png">
								<p class="nombre_telefono"><?php echo  datoscelular("7" , "1") ?></p>
								<p class="precio">$<?php echo  datoscelular("7" , "3") ?></p>
			</div>

			<div class="telefono" onclick="datosTelefono()">
								<img src="imagenes/nokia72.png">
								<p class="nombre_telefono"><?php echo  datoscelular("6" , "1") ?></p>
								<p class="precio">$<?php echo  datoscelular("6" , "3") ?></p>
			</div>	
		</div>

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