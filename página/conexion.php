
<?php
//Funcion para conectar con postgres
function conectar(){
	$conectar = pg_connect("host=localhost user=postgres port=5432 dbname=telefonia password=123456") or die ("Error de Conexion".pg_last_error());

	if($conectar){
	return $conectar;
	}
	
}

//crea el logo de la pagina tomando como parametros un nombre , direccion destino y una clase para aplicar css
function crear_boton($nombre , $direccion ,$class){
	$var="onLoad";
	$direccion = "location.href='".$direccion."'"; 
	echo "<div class='".$class."'onclick=".$var."=".$direccion.">".$nombre."</div>";
};



//crea el footer para las paginas que no son formularios
function footer_principal(){
	echo '<div class="colum1">
				<h1>Informacion de la compañia</h1>
				<p><b><br>Mision:</b> Esta empresa busca atender las necesidades tecnologicas de la sociedad ofreciendo los telefonos 
					moviles mas innovadores y recientes a los clientes interesados en productos de buena calidad a 
					un muy buen precio.
				<p><b><br>Vision:</b> Ser una empresa de referencia,lider en distribucionesde telefonia movil con presencia internacional, que se distinga por la calidad y el precio de sus productos.
	</div>	
	<div class="colum2">
				<h1>Redes sociales</h1>
				<div class="row">
					<br><img src="imagenes/facebook.png">
					<label>Siguenos en Facebook</label>
				</div>
				<div class="row">
					<br><img src="imagenes/twitter.png">
					<label>Siguenos en Twitter</label>
				</div>
				<div class="row">
					<br><img src="imagenes/instagram.png">
					<label>Siguenos en Instagram</label>
				</div>
	</div>	
	<div class="colum3">
				<h1>Contactenos</h1>
				<div class="row2">
					<br><img src="imagenes/mail.png">
					<label>Correo: checho530@gmail.com</label>
				</div>
				<div class="row2">
					<br><img src="imagenes/phone.png">
					<label>Telefono: +57 315603625</label>
				</div>
				
	</div>';
};

//crea el footer de los formularios
function footer_formularios(){
	echo '<div class="colum1">
				<h1>Informacion de la compañia</h1>
				<p><b><br>Mision:</b> Esta empresa busca atender las necesidades tecnologicas de la sociedad ofreciendo los telefonos 
					moviles mas innovadores y recientes a los clientes interesados en productos de buena calidad a 
					un muy buen precio.
				<p><b><br>Vision:</b> Ser una empresa de referencia,lider en distribucionesde telefonia movil con presencia internacional, que se distinga por la calidad y el precio de sus productos.
	</div>	
	<div class="colum2">
				<h1>Redes sociales</h1>
				<div class="row">
					<br><img src="../imagenes/facebook.png">
					<label>Siguenos en Facebook</label>
				</div>
				<div class="row">
					<br><img src="../imagenes/twitter.png">
					<label>Siguenos en Twitter</label>
				</div>
				<div class="row">
					<br><img src="../imagenes/instagram.png">
					<label>Siguenos en Instagram</label>
				</div>
	</div>	
	<div class="colum3">
				<h1>Contactenos</h1>
				<div class="row2">
					<br><img src="../imagenes/mail.png">
					<label>Correo: checho530@gmail.com</label>
				</div>
				<div class="row2">
					<br><img src="../imagenes/phone.png">
					<label>Telefono: +57 315603625</label>
				</div>
				
				
	</div>';

};

//crea el nav para las paginas que no son formularios
function nav_principal(){
	echo '<div class="navegacion">
	<ul class="menu">

		<li><a href="inicio.php">Inicio</a></li>
		<li><a onclick="bajar()">Celulares</a></li>
		<li><a href="inicio.php">Accesorios</a></li>
		<li><a href="inicio.php">Promo</a></li>
		
	</ul>
</div>';
};



function nav_administrador(){
	echo '<div class="navegacion">
	<ul class="menu">

		<li><a href="menu_administrador.php">Inicio</a></li>
		<li><a href="menu_administrador.php">Celulares</a></li>
		<li><a href="modificaciones/modificacion.php">Modificar</a></li>
		<li><a href="eliminaciones/eliminar.php">Eliminar</a></li>
		<li><a href="consultas/consultas.php">Consultas</a></li>
		<li><a href="">Formularios</a>
			<ul class="submenu">
				<li><a href="inserciones/empleadoFormulario.php">Empleado</a></li>
				<li><a href="inserciones/contratoFormulario.php">Contrato</a></li>
				<li><a href="inserciones/telefonoFormulario.php">Telefono</a></li>
				<li><a href="inserciones/facturaFormulario.php">Factura</a></li>
				<li><a href="inserciones/clienteFormulario2.php">Cliente</a></li>
			</ul>

		</li>
		
	</ul>
</div>';
};

function nav_principal_cliente(){
	echo '<div class="navegacion">
	<ul class="menu">

		<li><a href="../inicio.php">Inicio</a></li>
		<li><a onclick="bajar()">Celulares</a></li>
		<li><a href="../inicio.php">Accesorios</a></li>
		<li><a href="../inicio.php">Promo</a></li>
		
	</ul>
</div>';
};

function nav_administrador_consultas(){
	echo '<div class="navegacion">
	<ul class="menu">

		<li><a href="../menu_administrador.php">Inicio</a></li>
		<li><a href="../menu_administrador.php">Celulares</a></li>
		<li><a href="../modificaciones/modificacion.php">Modificar</a></li>
		<li><a href="../eliminaciones/eliminar.php">Eliminar</a></li>
		<li><a href="consultas.php">Consultas</a></li>
		<li><a href="">Formularios</a>
			<ul class="submenu">
				<li><a href="../inserciones/empleadoFormulario.php">Empleado</a></li>
				<li><a href="../inserciones/contratoFormulario.php">Contrato</a></li>
				<li><a href="../inserciones/telefonoFormulario.php">Telefono</a></li>
				<li><a href="../inserciones/facturaFormulario.php">Factura</a></li>
				<li><a href="../inserciones/clienteFormulario2.php">Cliente</a></li>
			</ul>

		</li>
		
	</ul>
</div>';
};

function nav_administrador_eliminar(){
	echo '<div class="navegacion">
	<ul class="menu">

		<li><a href="../menu_administrador.php">Inicio</a></li>
		<li><a href="../menu_administrador.php">Celulares</a></li>
		<li><a href="../modificaciones/modificacion.php">Modificar</a></li>
		<li><a href="eliminar.php">Eliminar</a></li>
		<li><a href="../consultas/consultas.php">Consultas</a></li>
		<li><a href="">Formularios</a>
			<ul class="submenu">
				<li><a href="../inserciones/empleadoFormulario.php">Empleado</a></li>
				<li><a href="../inserciones/contratoFormulario.php">Contrato</a></li>
				<li><a href="../inserciones/telefonoFormulario.php">Telefono</a></li>
				<li><a href="../inserciones/facturaFormulario.php">Factura</a></li>
				<li><a href="../inserciones/clienteFormulario2.php">Cliente</a></li>
			</ul>

		</li>
		
	</ul>
</div>';
};

function nav_administrador_modificar(){
	echo '<div class="navegacion">
	<ul class="menu">

		<li><a href="../menu_administrador.php">Inicio</a></li>
		<li><a href="../menu_administrador.php">Celulares</a></li>
		<li><a href="modificacion.php">Modificar</a></li>
		<li><a href="../eliminaciones/eliminar.php">Eliminar</a></li>
		<li><a href="../consultas/consultas.php">Consultas</a></li>
		<li><a href="">Formularios</a>
			<ul class="submenu">
				<li><a href="../inserciones/empleadoFormulario.php">Empleado</a></li>
				<li><a href="../inserciones/contratoFormulario.php">Contrato</a></li>
				<li><a href="../inserciones/telefonoFormulario.php">Telefono</a></li>
				<li><a href="../inserciones/facturaFormulario.php">Factura</a></li>
				<li><a href="../inserciones/clienteFormulario2.php">Cliente</a></li>
			</ul>

		</li>
		
	</ul>
</div>';
};

function nav_cliente(){
	echo '<div class="navegacion">
	<ul class="menu">

		<li><a href="menu_cliente.php">Inicio</a></li>
		<li><a onclick="bajar()">Celulares</a></li>
		<li><a href="menu_cliente.php">Accesorios</a></li>
		<li><a href="menu_cliente.php">Promo</a></li>
		<li><a href="menu_cliente.php">Compras</a></li>
		
	</ul>
</div>';
};

//crea el nav para los formularios
function nav_formularios(){
	echo '<div class="navegacion">
	<ul class="menu">

		<li><a href="../menu_administrador.php">Inicio</a></li>
		<li><a href="../menu_administrador.php">Celulares</a></li>
		<li><a href="../modificaciones/modificacion.php">Modificar</a></li>
		<li><a href="../eliminaciones/eliminar.php">Eliminar</a></li>
		<li><a href="../consultas/consultas.php">Consultas</a></li>
		<li><a href="">Formularios</a>
			<ul class="submenu">
				<li><a href="empleadoFormulario.php">Empleado</a></li>
				<li><a href="contratoFormulario.php">Contrato</a></li>
				<li><a href="telefonoFormulario.php">Telefono</a></li>
				<li><a href="facturaFormulario.php">Factura</a></li>
				<li><a href="clienteFormulario2.php">Cliente</a></li>
			</ul>

		</li>
		
	</ul>
</div>';
}




function datoscelular($idc ,$columna){
	conectar();
	$var1=pg_query("select * from telefono where idt='".$idc."'");
	$row = pg_fetch_array($var1);
	$var2 = $row[$columna];
	return $var2;
}



//crea una tabla que muestra los valores existentes en una tabla tomando como parametro dicha tabla y los campos a consultar
function consulta($tabla,$campos){

	$var3=$campos[0];
	for ($i=1;$i<count($campos);$i++){ 			//el checkbox me trae un array de todos los datos que se seleccionaron
	$var3= $var3.",".$campos[$i];				//se recorre todas las posiciones y se guarda en una variable como una linea
	}		
														//de texto que se usara en el select
	$type2="mensaje";
	$var1=pg_query("select ".$var3." from ".$tabla."");	   //select con $var1 como los campos a consultar y $table como la tabla		
	echo "<p class=".$type2.">Datos de ".$tabla."</p>";
	echo '<table class="consulta_table">';						//se empieza estructura de la tabla que se aumentara en los ciclos
	echo "<tr>";
	for ($i=0; $i<pg_num_fields($var1) ; $i++) { 		//pg_fiel_name retorna un string con nombre de las columnas de la consulta 
				$var2=pg_field_name ($var1 , $i );			//tomando parametros del pg_query y el numero de la columna
				echo "<th>".$var2."</th>";
    		}
    		"</tr>";												

	while ($row = pg_fetch_array($var1)) {					//pg_fetch_array recorre todas la filas del select que hicimos	
    echo 	"<tr>";															
    		for ($i=0; $i<pg_num_fields($var1) ; $i++) { 	//pg_num_fields retorna un entero con el numero de columnas
    			echo "<td>".$row[$i]."</td>";
    		}
    		"</tr>";		
    }													//se termina la tabla
    echo "</table>";
};





?>
