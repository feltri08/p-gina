<!DOCTYPE html>
<html lang = "es">
<head>
	<title> Formulario factura </title>
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
$var1=pg_query("select * from cliente");
$var2=pg_query("select * from empleado");
$var3=pg_query("select * from telefono");
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

<form class="formulario" ACTION="facturaDatos.php" METHOD="post" onsubmit="return llenadoFactura()"/>
<br>
<p align="center" class="titulo_formulario">Formulario Factura</p>

<table class="formulario_table">
<tr>
<th>

<label><p align="left" width="100">Cliente:</p>
<p align="center" width="150"><select name = "fk_cedulac">
 <?PHP 
    while ($row = pg_fetch_array($var1)) {
    $codigo=$row[0];
    $nombre=$row[1];
    echo "<option value=".$codigo.">".$codigo.".".$nombre."</option>";
    }
?>
</select></p></label>


<label><p align="left" width="100">Telefono:</p>
<p align="center" width="150"><select name = "fk_idt">
 <?PHP 
    while ($row = pg_fetch_array($var3)) {
    $codigo3=$row[0];
    $nombre3=$row[1];
    echo "<option value=".$codigo3.">".$codigo3.".".$nombre3."</option>";
    }
?>
</select></p></label>


<label><p align="left" width="100">Valor_neto:</p>
<p align="center" width="150"><INPUT id="valor_neto" NAME="valor_neto" maxlength="7" TYPE="text" onkeypress="return numero(event)"//></p></label>

<label><p align="left" width="100">Fecha:</p>
<p align="center" width="150"><INPUT id="fecha" NAME="fecha"  TYPE="date"/></p></label>

<label><p align="left" width="100">Valor_total:</p>
<p align="center" width="150"><INPUT id="valor_total" NAME="valor_total" maxlength="7" TYPE="text" onkeypress="return numero(event)"/></p></label>

</th>
<th>

<label><p align="left" width="100">Empleado:</p>
<p align="center" width="150"><select name = "fk_ide" >
 <?PHP 
    while ($row = pg_fetch_array($var2)) {
    $codigo2=$row[0];
    $nombre2=$row[2];
    echo "<option value=".$codigo2.">".$codigo2.".".$nombre2."</option>";
    }
?>
</select></p></label>


<label><p align="left" width="100">Identificacion:</p>
<p align="center" width="150"><input id="idf" name="idf"  maxlength="10" type="text" placeholder="Codigo de la factura..." onkeypress="return numero(event)"/></p></label>

<label><p align="left" width="100">Descuento:</p>
<p align="center" width="150"><INPUT id="descuento" NAME="descuento" maxlength="7" TYPE="text" onkeypress="return numero(event)"/></p></label>

<label><p align="left" width="100">Impuesto:</p>
<p align="center" width="150"><INPUT id="impuesto" NAME="impuesto" maxlength="7" TYPE="text" onkeypress="return numero(event)"/></p></label>

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