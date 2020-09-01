<?php
	extract($_POST);
	
	/*se imprimen todos los datos en pantalla
	echo "$cedula";
	echo "$nombre";
	echo "$apellidos";
	echo "$telefono";
	echo "$correo";
	echo "$ciudad";
	echo "$direccion";
	echo "$genero";
	echo "$estrato";
	echo "$nacionalidad";*/
	
	include("../conexion.php");

	//se insertan los datos
	$sql="insert into cliente(cedula, nombre, apellidos, telefono, correo , ciudad ,direccion , genero 
	, estrato , nacionali ,fk_usuario_id) 
	values ('$cedula','$nombre', '$apellidos','$telefono','$correo','$ciudad','$direccion','$genero' 
	,'$estrato','$nacionalidad' ,'$fk_usuario_id')";

	
	//se intentan guardar los datos en la base
	$ejecutar=pg_query(conectar(), $sql);



	if(!$ejecutar){
		echo "<script>
                alert('Los datos no se lograron ingresar');
                window.location= 'clienteFormulario2.php'
    			</script>";

		}else{	
		echo "<script>
				 alert('Los datos se ingresaron correctamente');
				 window.location= 'clienteFormulario2.php' ;
                </script>";						
							
	} 
	
	

?>