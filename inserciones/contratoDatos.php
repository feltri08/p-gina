<?php
	extract($_POST);
	
	//se imprimen todos los datos en pantalla
	/*echo "$idco";
	echo "$fechaIni";
	echo "$fechaFin";
	echo "$salario";
	echo "$cargo";
	echo "$horaentra";
	echo "$horasali";
	echo "$vacaciones";
	echo "$fk_ide3";*/
	
	include("../conexion.php");
	

	//se insertan los datos
	$sql ="insert into contrato(idco, fechaini, fechafin, salario,cargo, horaentra , horasali , vacaciones , fk_ide3 ) 
	values ('$idco', '$fechaIni', '$fechaFin', '$salario','$cargo', '$horaentra' , '$horasali' , '$vacaciones' , '$fk_ide3')";

	//se intentan guardar los datos en la base
	$ejecutar=pg_query(conectar(), $sql);

	//muestrar un mensaje si existe un error al registrar los datos
	if(!$ejecutar){
		echo "<script>
                alert('Los datos no se lograron ingresar');
                window.location= 'contratoFormulario.php'
    			</script>";

		}else{	
		echo "<script>
				 alert('Los datos se ingresaron correctamente');
				window.location= 'contratoFormulario.php' ;
                </script>";						
							
	} 
?>