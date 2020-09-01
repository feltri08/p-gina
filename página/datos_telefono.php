<!DOCTYPE html>
<html lang="es">
<head>
	<title>Pagina web</title>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" href="style.css?v=<?php echo time(); ?>" />  
	

</head>

<?PHP
session_start();
include("conexion.php");
include("funcionesJS.html");

?>

<body>
<?php  
echo $_SESSION['imagen']; 
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
	</div>

	<div class="section_contenido">

	


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