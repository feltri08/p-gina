<!DOCTYPE html>
<html lang = "es">
<head>
	<title> Formulario cliente </title>
	<meta charset = "UTF-8"/>
	<link rel="stylesheet" href="../style.css?v=<?php echo time(); ?>" />

</head>

<body>

<?PHP
include("validacionJS.html");
include("../conexion.php");
$conexion=conectar();
$var1=pg_query("select * from empleado");
?>

<header>
<div class="logo" onclick="location.href='../inicio.php'"></div>	
<div class="header_left">
	<?php 
		crear_boton("Iniciar Sesion" , "../valida.php" ,"boton_header");
		crear_boton("Registrarse" , "clienteFormulario.php" ,"boton_header");		
	?>
	<div>
</header>

<nav>
<?php 
    nav_principal_cliente();
 ?>
</nav>

<section class="section_cliente">

<div class="section_formulario_cliente">
<form class="formulario"  ACTION="clienteDatos.php" METHOD="POST" onsubmit="return llenadoCliente()"/>

<table class="formulario_table">
<tr>
<th>


<label><p align="left" width="100">Cedula:</p>
<p align="center" width="150"><INPUT id="cedula" name="cedula" maxlength="10" type="TEXT" onkeypress="return numero(event)"/></p></label>


<label><p align="left" width="100">Nombre:</p>
<p align="center" width="150"><INPUT id="nombre" NAME="nombre" MAXLENGTH="30" TYPE="TEXT" placeholder="Escriba sus nombres..." onkeypress="return letra(event)"/></p></label>
 
<label><p align="left" width="100">Telefono:</p>
<p align="center" width="150"><INPUT id="telefono" NAME="telefono" MAXLENGTH="10" TYPE="TEXT" VALUE="" onkeypress="return numero(event)" /></p></label>

<label><p align="left" width="100">Direccion:</p>
<p align="center" width="150"><INPUT id="direccion" NAME="direccion" MAXLENGTH="50" TYPE="TEXT" placeholder="Escriba su direccion..." /></p></label>

<label><p align="left" width="100">Nacionalidad:
<p align="center" width="150"><INPUT id="nacionalidad" NAME="nacionalidad" MAXLENGTH="30" TYPE="TEXT" placeholder="Escriba su nacionalidad..." onkeypress="return letra(event)"/></p></label>
 
</th>
<th>

<label>
<p align="left" width="100">Genero:</p>

<p align="center" width="150">
<select id="genero" name = "genero">
<option value = "Masculino">Masculino
<option value = "Femenino">Femenino
<option value = "Otro">Otro
</select></p></label>

<label><p align="left" width="100">Apellido:</p>
<p align="center" width="150"><INPUT id="apellidos" NAME="apellidos" MAXLENGTH="30" TYPE="TEXT" placeholder="Escriba sus apellidos..." onkeypress="return letra(event)"/></p></label>

<label><p align="left" width="100">Correo:</p>
<p align="center" width="150"><INPUT id="correo" NAME="correo"  maxlength="30" TYPE="text" /></p></label>

<label><p align="left" width="100">Ciudad:</p>
<p align="center" width="150"><INPUT id="ciudad" NAME="ciudad" MAXLENGTH="20" TYPE="TEXT" placeholder="Escriba su ciudad..." onkeypress="return letra(event)"/></p></label>
 
<label><p align="left" width="100">Estrato:</p>
<p align="center" width="150"><INPUT id="estrato" NAME="estrato" MAXLENGTH="1" TYPE="TEXT" placeholder="Digite su estrato..." onkeypress="return numero(event)"/></p></label>

<INPUT id="fk_usuario_id" NAME="fk_usuario_id" TYPE="hidden" value="1">
 
<tr>
<td><p align = "center">
<input type="reset"> 
</p></td>
<td><p align = "center">
<input value="Crear" type="submit"> 
</p></td>
</tr>

</th>
</tr>
</table>

</form>
</div>	


<div class="imagen_cliente">
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