<!DOCTYPE html>
<html lang = "es">
<head>
	<title> Formulario empleado </title>
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
$var1=pg_query("select * from eps");
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

<form class="formulario" ACTION="empleadoDatos.php" METHOD="post" onsubmit="return llenadoEmpleado()"/>
<br>
<p align="center" class="titulo_formulario">Formulario Empleado</p>

<table class="formulario_table">
<tr>
<th>

<label><p align="left" width="100">Identificacion:</p>
<p align="center" width="150"><input id="ide" name="ide" autofocus maxlength="10" type="text" placeholder="Codigo en la empresa..." onkeypress="return numero(event)"/></p></label>

<label><p align="left" width="100">Tipo empleado:</p>
<p align="center" width="150">
<select name = "fk_usuario_id2" required>
<option value = "2">Administrador
</select></p></label>

<label><p align="left" width="100">Nombre:</p>
<p align="center" width="150"><INPUT id="nombre" NAME="nombre" MAXLENGTH="30" TYPE="TEXT" placeholder="Escriba sus nombres..."    onkeypress="return letra(event)"/></p></label>

<label><p align="left" width="100">Genero:</p>
<p align="center" width="150">
<select name = "genero" required>
<option value = "Masculino">Masculino
<option value = "Femenino">Femenino
<option value = "Otro">Otro
</select></p></label>

<label><p align="left" width="100">Fecha nacimiento:</p>
<p align="center" width="150"><INPUT id="fecha_nacimiento" NAME="fecha_nacimiento"  TYPE="date"/></p></label>

<label><p align="left" width="100">Tipo de sangre:</p>
<p align="center" width="150">
<select name = "tipo_sangre">
<option value = "O+"> O+
<option value = "O-"> O-
<option value = "A+"> A+
<option value = "A-"> A-
<option value = "B+"> B+
<option value = "B-"> B-
<option value = "AB+"> AB+
<option value = "AB-"> AB-
</select></p>
</label>

<label><p align="left" width="100">Estrato:</p>
<p align="center" width="150"><INPUT id="estrato" NAME="estrato" MAXLENGTH="1" TYPE="TEXT" placeholder="Digite su estrato..." onkeypress="return numero(event)"/></p></label>

<label><p align="left" width="100">Nacionalidad:</p>
<p align="center" width="150"><INPUT id="nacionalidad" NAME="nacionalidad" MAXLENGTH="20" TYPE="TEXT" placeholder="Escriba su nacionalidad..." onkeypress="return letra(event)"/></p></label>

</th>
<th>

<label><p align="left" width="100">Cedula:</p>
<p align="center" width="150"><INPUT id="cedula" NAME="cedula" MAXLENGTH="10" TYPE="TEXT" VALUE="" onkeypress="return numero(event)"/></p></label>

<label><p align="left" width="100">Apellido:</p>
<p align="center" width="150"><INPUT id="apellido" NAME="apellido" MAXLENGTH="30" TYPE="TEXT" placeholder="Escriba sus apellidos..." onkeypress="return letra(event)"/></p></label>

<label><p align="left" width="100">Telefono:</p>
<p align="center" width="150"><INPUT id="telefono" NAME="telefono" MAXLENGTH="10" TYPE="TEXT" VALUE="" onkeypress="return numero(event)"/></p></label>

<label><p align="left" width="100">Estado civil:</p>
<p align="center" width="150">
<select name = "estado_civil">
<option value = "soltero">Soltero/a 
<option value = "comprometido">Comprometido/a
<option value = "relacion">Relacion
<option value = "casado">Casado/a
<option value = "union libre">Union libre
<option value = "separado">Separado/a
<option value = "divorciado">Divorciado/a
<option value = "viudo">Viudo/a
</select></p></label>

<label><p align="left" width="100">Hijos:</p>
<p align="center" width="150">
<input type="text" id="hijos" name="hijos" align= "center" maxlength=1 placeholder="Numero de hijos..." onkeypress="return numero(event)"/></p></label>


<label><p align="left" width="100">Fecha pension:</p>
<p align="center" width="150"><INPUT id="fecha_pension" NAME="fecha_pension"  TYPE="date"/></p></label>

<label><p align="left" width="100">EPS:</p>
<p align="center" width="150">
<select name = "fk_ideps">
 <?PHP 
    while ($row = pg_fetch_array($var1)) {
    $codigo=$row[0];
    $nombre=$row[1];
    echo "<option value=".$codigo.">".$codigo.".".$nombre."</option>";
    }
?>
</select></p></label>

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
</div>	
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