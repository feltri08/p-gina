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
?>




<header>
	<div class="logo" onclick="location.href='menu_administrador.php'"></div>
	<div class="header_left">
	<?php 
		
		crear_boton("Cerrar Sesion" , "cerrar_sesion.php" ,"boton_header");		
	?>
	<div>
</header>


<nav>
	<?php 
		nav_administrador();
 	?>
</nav>
<section class="section_principal">

	<div class="box"><p>Hola Administrador <?php echo $_SESSION['nombre'] ?></p>
		<p class="texto"> Realizar el dia de hoy el informe <br> de ventas totales de telefonos nuevos. </p>
		</div>



	<div class="section_contenido_cliente"></div>


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