<!DOCTYPE html>
<html lang = "es">
<head>
	<title> Formulario telefono </title>
	<meta charset = "UTF-8"/>
	
	<link rel="stylesheet" href="../style.css?v=<?php echo time(); ?>" />

</head>

<body onunload="idleLogout()">

<?PHP
session_start();
include("inactividadJS.html");
include("validacionJS.html");
include("../conexion.php");
$conexion=conectar();
$var1=pg_query("select * from proveedor");
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
	nav_formularios();
 ?>	
</nav>

<section class="section_formularios">

<form class="formulario" ACTION="telefonoDatos.php" METHOD="post" onsubmit="return llenadoTelefono()"/>
<br>
<p align="center" class="titulo_formulario">Formulario Telefono</p>

<table class="formulario_table">
<tr>
<th>

<label><p align="left" width="100">Identificacion:</p>
<p align="center" width="150"><input id="idt" name="idt" autofocus maxlength="10" type="text" onkeypress="return numero(event)"/></p></label>

<label><p align="left" width="100">Modelo:</p>
<p align="center" width="150"><INPUT id="modelo" NAME="modelo" MAXLENGTH="20" TYPE="TEXT"/></p></label>

<label><p align="left" width="100">Marca:</p>
<p align="center" width="150"><INPUT id="marca" NAME="marca" MAXLENGTH="20" TYPE="TEXT"/></p></label>

<label><p align="left" width="100">Valor:</p>
<p align="center" width="150"><INPUT id="valor" NAME="valor" TYPE="number" onkeypress="return numero(event)"/></p></label>

<label><p align="left" width="100">Garantia:</p>
<p align="center" width="150"><INPUT id="garantia" NAME="garantia" MAXLENGTH="10" TYPE="TEXT" placeholder="En meses..." onkeypress="return numero(event)"/></p></label>

<label><p align="left" width="100">Inventario:</p>
<p align="center" width="150"><INPUT id="inventario" NAME="inventario" TYPE="number" onkeypress="return numero(event)"/></p></label>

</th>
<th>

<label><p align="left" width="100">Proveedor:</p>
<p align="center" width="150">
<select name = "fk_idp">
 <?PHP 
    while ($row = pg_fetch_array($var1)) {
    $codigo=$row[0];
    $nombre=$row[1];
    echo "<option value=".$codigo.">".$codigo.".".$nombre."</option>";
    }
?>
</select></p></label>

<label><p align="left" width="100">Especificacion:</p>
<textarea rows="10" cols="300"  id="especificacion" NAME="especificacion">
</textarea></label>

<label><p align="left" width="100">Descuento:</p>
<p align="center" width="150"><INPUT id="descuento" NAME="descuento" TYPE="number" onkeypress="return numero(event)"/></p></label>

<label><p align="left" width="100">Fecha lanzamiento:</p>
<p align="center" width="150"><INPUT id="fecha_lanzamiento" NAME="fecha_lanzamiento"  TYPE="date"/></p></label>

<label><p align="left" width="100">Ventas:</p>
<p align="center" width="150"><INPUT id="ventas" NAME="ventas" TYPE="number" onkeypress="return numero(event)"/></p></label>

<tr>
<td><p align = "center">
<input type="reset"> 
</p></td>
<td><p align = "center">
<input type="submit"> 
</p></td>
</tr>

</th>
</tr>
</table>
</form>
</section>

<footer>
<?php 
echo footer_formularios();
 ?>
</footer>
<div class="barra">
	<p>Copyright ©2020 Todos los derechos reservados</p>
</div>
</body>
</html>