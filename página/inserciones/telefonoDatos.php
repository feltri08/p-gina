<?PHP
	extract($_POST);
	
	/*se imprimen todos los datos en pantalla
	echo "$idt";
	echo "$modelo";
	echo "$marca";
	echo "$valor";
	echo "$garantia";
	echo "$inventario";
	echo "$ventas";
	echo "$especificacion";
	echo "$descuento";
	echo "$fecha_lanzamiento";
	echo "$fk_idp";*/

	//conectamos con el servidor
	include("../conexion.php");

	//se insertan los datos
	$sql ="insert into telefono(idt, modelo, marca, valor, garantia, inventario , ventas , especificacion , descuento 
	, fecha_lanzamiento , fk_idp ) 
	values ('$idt', '$modelo', '$marca', '$valor','$garantia', '$inventario' , '$ventas' , '$especificacion' , '$descuento' 
	, '$fecha_lanzamiento' , '$fk_idp')";

	//se intentan guardar los datos en la base
	$ejecutar=pg_query(conectar(), $sql);

	//muestrar un mensaje si existe un error al registrar los datos
	if(!$ejecutar){
		echo "<script>
                alert('Los datos no se lograron ingresar');
                window.location= 'telefonoFormulario.php'
    			</script>";

		}else{	
		echo "<script>
				 alert('Los datos se ingresaron correctamente');
				window.location= 'telefonoFormulario.php' ;
                </script>";						
							
	}
?>