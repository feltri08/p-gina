<!DOCTYPE html>
<html lang="es">
<head>

	<title>Pagina web</title>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" href="style.css?v=<?php echo time(); ?>" />  
	
	

</head>
<body onunload="idleLogout()"> 

<?PHP
session_start();
include("inactividadJS.html");
include("conexion.php");
include("funcionesJS.html");
?>


<header>
	<div class="logo" onclick="location.href='menu_cliente.php'"></div>
	<div class="header_left">
	<?php 
		
		crear_boton("Cerrar Sesion" , "cerrar_sesion.php" ,"boton_header");		
	?>
	<div>
</header>


<nav>
	<?php 
		nav_cliente();
 	?>
</nav>

<?php 
	if($_SESSION["tipo_usuario"] == "3"){
?>
	<section class="section_principal">

	<div class="box"><p>Hola <?php echo $_SESSION['nombre'] ?></p>
		<p class="texto">Tenemos los mejores telefonos para ti   y por ser cliente premium <br>recibe descuento  en todos los smarthphones de la tienda.</p>
		</div>

	<div class="section_contenido">

		<p class="titulo_section">Celulares</p>
	
		<div class="fila_telefonos">
			<div class="telefono" onclick="datosTelefono2()" >
								  <img src="imagenes/huaweimate30.png">
								  <p class="nombre_telefono"><?php echo datoscelular("1" , "1") ?></p>
								  <p class="tachado">$<?php echo  datoscelular("1" , "3") ?></p>
								  <p class="precio">$<?php echo (datoscelular("1" , "3"))-(datoscelular("1" , "8")) ?></p>
			</div>

			<div class="telefono" onclick="datosTelefono2()" >
									<img src="imagenes/motoe5.png">
									<p class="nombre_telefono"><?php echo datoscelular("3" , "1") ?></p>
									<p class="tachado">$<?php echo  datoscelular("3" , "3") ?></p>
									<p class="precio">$<?php echo (datoscelular("3" , "3"))-(datoscelular("3" , "8")) ?></p>
			</div>

			<div class="telefono" onclick="datosTelefono2()" >
									<img src="imagenes/huaweip20.png">
									<p class="nombre_telefono"><?php echo datoscelular("2" , "1") ?></p>
									<p class="tachado">$<?php echo  datoscelular("2" , "3") ?></p>
									<p class="precio">$<?php echo (datoscelular("2" , "3"))-(datoscelular("2" , "8")) ?></p>
			</div>

			<div class="telefono" onclick="datosTelefono2()" >
									<img src="imagenes/huaweip30.png">
									<p class="nombre_telefono"><?php echo datoscelular("8" , "1") ?></p>
									<p class="tachado">$<?php echo  datoscelular("8" , "3") ?></p>
									<p class="precio">$<?php echo (datoscelular("8" , "3"))-(datoscelular("8" , "8")) ?></p>
			</div>	
		</div>

		<div class="fila_telefonos2">
			<div class="telefono" onclick="datosTelefono2()"  >
									<img src="imagenes/nokia71.png">
									<p class="nombre_telefono"><?php echo datoscelular("4" , "1") ?></p>
									<p class="tachado">$<?php echo  datoscelular("4" , "3") ?></p>
									<p class="precio">$<?php echo (datoscelular("4" , "3"))-(datoscelular("4" , "8")) ?></p>
			</div>

			<div class="telefono" onclick="datosTelefono2()">
									<img src="imagenes/motoe6.png">
									<p class="nombre_telefono"><?php echo  datoscelular("5" , "1") ?></p>
									<p class="tachado">$<?php echo  datoscelular("5" , "3") ?></p>
									<p class="precio">$<?php echo (datoscelular("5" , "3"))-(datoscelular("5" , "8")) ?></p>
			</div>

			<div class="telefono" onclick="datosTelefono2()"  >
									<img src="imagenes/xiamiredminote.png">
									<p class="nombre_telefono"><?php echo  datoscelular("7" , "1") ?></p>
									<p class="tachado">$<?php echo  datoscelular("7" , "3") ?></p>
									<p class="precio">$<?php echo (datoscelular("7" , "3"))-(datoscelular("7" , "8")) ?></p>
			</div>

			<div class="telefono" onclick="datosTelefono2()" >
									<img src="imagenes/nokia72.png">
									<p class="nombre_telefono"><?php echo  datoscelular("6" , "1") ?></p>
									<p class="tachado">$<?php echo  datoscelular("6" , "3") ?></p>
									<p class="precio">$<?php echo (datoscelular("6" , "3"))-(datoscelular("6" , "8")) ?></p>
			</div>	
		</div>

	</div>
	<?php
}else{
	?>
	<section class="section_principal">

	<div class="box"><p>Hola <?php echo $_SESSION['nombre'] ?></p>
		<p class="texto">Los productos mas recientes  <br> tenemos los mejores telefonos para ti <?php echo $_SESSION['nombre'] ?> </p>
		</div>

	<div class="section_contenido">

		<p class="titulo_section">Celulares</p>
	
		<div class="fila_telefonos">
			<div class="telefono" onclick="datosTelefono2()" onclick="<?php $_SESSION["idtelefono"]="1";  
																		    $_SESSION["imagen"]="imagenes/huaweimate30.png"; ?> ">
								<img src="imagenes/huaweimate30.png">
								<p class="nombre_telefono"><?php echo datoscelular("1" , "1") ?></p>
								<p class="precio">$<?php echo  datoscelular("1" , "3") ?></p>							 
			</div>

			<div class="telefono" onclick="datosTelefono2()" onclick="<?php $_SESSION["idtelefono"]="3";  
																		    $_SESSION["imagen"]="imagenes/motoe5.png"; ?> ">
								<img src="imagenes/motoe5.png">
								<p class="nombre_telefono"><?php echo datoscelular("3" , "1") ?></p>
								<p class="precio">$<?php echo  datoscelular("3" , "3") ?></p>							
			</div>

			<div class="telefono" onclick="datosTelefono2()" onclick="<?php $_SESSION["idtelefono"]="2";  
																		    $_SESSION["imagen"]="imagenes/huaweip20.png"; ?> ">
							    <img src="imagenes/huaweip20.png">
								<p class="nombre_telefono"><?php echo datoscelular("2" , "1") ?></p>
								<p class="precio">$<?php echo  datoscelular("2" , "3") ?></p>				
			</div>

			<div class="telefono" onclick="datosTelefono2()" onclick="<?php $_SESSION["idtelefono"]="8";  
																		    $_SESSION["imagen"]="imagenes/huaweip30.png"; ?> ">
								<img src="imagenes/huaweip30.png">
								<p class="nombre_telefono"><?php echo datoscelular("8" , "1") ?></p>
								<p class="precio">$<?php echo  datoscelular("8" , "3") ?></p>
			</div>	
		</div>

		<div class="fila_telefonos2">
			<div class="telefono" onclick="datosTelefono2()" onclick="<?php $_SESSION["idtelefono"]="4";  
																		    $_SESSION["imagen"]="imagenes/nokia71.png"; ?> ">
								<img src="imagenes/nokia71.png">
								<p class="nombre_telefono"><?php echo datoscelular("4" , "1") ?></p>
								<p class="precio">$<?php echo  datoscelular("4" , "3") ?></p>
			</div>

			<div class="telefono" onclick="datosTelefono2()" onclick="<?php $_SESSION["idtelefono"]="5";  
																		    $_SESSION["imagen"]="imagenes/motoe6.png"; ?> ">
								<img src="imagenes/motoe6.png">
								<p class="nombre_telefono"><?php echo  datoscelular("5" , "1") ?></p>
								<p class="precio">$<?php echo  datoscelular("5" , "3") ?></p>
			</div>

			<div class="telefono" onclick="datosTelefono2()" onclick="<?php $_SESSION["idtelefono"]="7";  
																		    $_SESSION["imagen"]="imagenes/xiamiredminote.png"; ?> ">
								<img src="imagenes/xiamiredminote.png">
								<p class="nombre_telefono"><?php echo  datoscelular("7" , "1") ?></p>
								<p class="precio">$<?php echo  datoscelular("7" , "3") ?></p>
			</div>

			<div class="telefono" onclick="datosTelefono2()" onclick="<?php $_SESSION["idtelefono"]="6";  
																		    $_SESSION["imagen"]="imagenes/nokia72.png"; ?> ">
								<img src="imagenes/nokia72.png">
								<p class="nombre_telefono"><?php echo  datoscelular("6" , "1") ?></p>
								<p class="precio">$<?php echo  datoscelular("6" , "3") ?></p>
			</div>	
		</div>
	</div>



<?php	
}
?>


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