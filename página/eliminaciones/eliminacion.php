<?PHP

session_start();


 extract($_POST);
 include("../conexion.php"); 
 $conn=conectar(); 



 
 switch ($tabla2) {
 	case 'empleado':
 			 $sql1= "DELETE FROM empleado where ide='".$clave."'";
 		break;

 	case 'contrato':
 			 $sql1= "DELETE FROM contrato where idco='".$clave."'";
 		break;

 	case 'telefono':
 			 $sql1= "DELETE FROM telefono where idt='".$clave."'";
 		break;

 	case 'factura':
 			 $sql1= "DELETE FROM factura  where idf='".$clave."'";
 		break;

 	case 'cliente':
 			 $sql1= "DELETE FROM cliente where cedula='".$clave."'";
 		break;
 	
 	default:
 		
 		break;
 }


$result1 = pg_query($conn,$sql1);
echo "<script>
                alert('Los datos se eliminaron correctamente');
                window.location= 'eliminar.php'
    			</script>";

