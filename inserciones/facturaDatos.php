<?PHP
	extract($_POST);

	include("../conexion.php");

	//se insertan los datos
	$sql="insert into factura(idf, fecha, valor_neto, descuento, impuesto, valor_total ,fk_cedulac , fk_ide , fk_idt) 
	values ('$idf','$fecha', '$valor_neto','$descuento','$impuesto','$valor_total','$fk_cedulac' ,'$fk_ide' , '$fk_idt')";

	
	//se intentan guardar los datos en la base
	$ejecutar=pg_query(conectar(), $sql);

	//muestrar un mensaje si existe un error al registrar los datos
	if(!$ejecutar){
		echo "<script>
                alert('Los datos no se lograron ingresar');
               	window.location= 'facturaFormulario.php';
    			</script>";

		}else{	
		echo "<script>
				alert('Los datos se ingresaron correctamente');
				window.location= 'facturaFormulario.php';
                </script>";						
							
	}
?>