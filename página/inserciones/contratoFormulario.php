<!DOCTYPE html>
<html lang = "es">
<head>
	<title> Formulario del contrato </title>
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
$var1=pg_query("select * from empleado");
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

<form class="formulario" ACTION="contratoDatos.php" METHOD="post" onsubmit="return llenadoContrato()"/>
<br>
<p align="center" class="titulo_formulario">Formulario Contrato</p>

<table class="formulario_table">
<tr>
<th>

<label><p align="left" width="100">Identificacion:</p>
<p align="center" width="150"><input id="idco" name="idco" autofocus maxlength="10" type="text" placeholder="Codigo del contrato..." onkeypress="return numero(event)"/></p></label>

<label><p align="left" width="100">Fecha inicio:</p>
<p align="center" width="150"><INPUT id="fechaIni" NAME="fechaIni"  TYPE="date"/></p></label>

<label><p align="left" width="100">Fecha fin:</p>
<p align="center" width="150"><INPUT id="fechaFin" NAME="fechaFin"  TYPE="date"/></p></label>

<label><p align="left" width="100">Salario:</p>
<p align="center" width="150"><input id="salario" name="salario" type="number"/></p></label>

<label><p align="left" width="100">Cargo:</p>
<p align="center" width="150">
<select name = "cargo" required>
<option value = "Ejecutivo">Ejecutivo/a
<option value = "Administrador">Administrador/a
<option value = "Gerente">Gerente/a
<option value = "Supervisor">Supervisor/a
<option value = "Vigilante">Vigilante
<option value = "Secretario">Secretario/a
</select></p></label>

</th>
<th>

<label><p align="left" width="100">Hora entrada:</p>
<p align="center" width="150"><INPUT id="horaentra" NAME="horaentra"  TYPE="time" /></p></label>

<label><p align="left" width="100">Hora salida:</p>
<p align="center" width="150"><INPUT id="horasali" NAME="horasali"  TYPE="time" /></p></label>

<label><p align="left" width="100">Dias de vacaciones disponibles:</p>
<p align="center" width="150"><INPUT id="vacaciones" NAME="vacaciones"  TYPE="text" onkeypress="return numero(event)"/></p></label>

<label><p align="left" width="100">Empleado contrato:</p>
<p align="center" width="150">
<select name="fk_ide3">
 <?PHP 
    while ($row = pg_fetch_array($var1)) {
    $codigo=$row[0];
    $nombre=$row[2];
    echo "<option value=".$codigo.">".$codigo.".".$nombre."</option>";
    }
?>
</select>
</p>
</label>


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