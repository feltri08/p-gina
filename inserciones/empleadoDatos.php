<?PHP
	extract($_POST);
	
	/*se imprimen todos los datos en pantalla
	echo "$ide";
	echo "$cedula";
	echo "$nombre";
	echo "$apellido";
	echo "$telefono";
	echo "$fecha_nacimiento";
	echo "$genero";
	echo "$tipo_sangre";
	echo "$hijos";
	echo "$fecha_pension";
	echo "$estado_civil";
	echo "$estrato";
	echo "$nacionalidad";
	echo "$fk_ideps"; */
	
	//conectamos con el servidor
	include("../conexion.php");

	//se insertan los datos
	$sql ="insert into empleado(ide, cedula, nombre, apellidos ,telefono, fecha_nacimiento , genero , tipo_sangre , hijos 
	, fecha_pension , estado_civil , estrato , nacionalidad , fk_ideps ,fk_usuario_id2) 
	values ('$ide', '$cedula', '$nombre', '$apellido','$telefono', '$fecha_nacimiento' , '$genero' , '$tipo_sangre' , '$hijos' 
	, '$fecha_pension' , '$estado_civil' , '$estrato' , '$nacionalidad' , '$fk_ideps' , '$fk_usuario_id2')";

	//se intentan guardar los datos en la base
	$ejecutar=pg_query(conectar(), $sql);

	//muestrar un mensaje si existe un error al registrar los datos
	if(!$ejecutar){
		echo "<script>
                alert('Los datos no se lograron ingresar');
                window.location= 'empleadoFormulario.php'
    			</script>";

		}else{	
		echo "<script>
				 alert('Los datos se ingresaron correctamente');
				window.location= 'empleadoFormulario.php' ;
                </script>";						
							
	}
	
?>