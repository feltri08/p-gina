<?PHP

session_start();


 extract($_POST);
 include("../conexion.php"); 
 $conn=conectar(); 



 switch ($tabla2) {
 	case 'empleado':
 			$sql1= "UPDATE empleado SET  ide='".$clave."',cedula='".$nombre[0]."',nombre='".$nombre[1]."',apellidos='".$nombre[2]."',telefono='".$nombre[3]."',fecha_nacimiento='".$nombre[4]."',genero='".$nombre[5]."',tipo_sangre='".$nombre[6]."',hijos='".$nombre[7]."',fecha_pension='".$nombre[8]."',estado_civil='".$nombre[9]."',estrato='".$nombre[10]."',nacionalidad='".$nombre[11]."',fk_ideps='".$nombre[12]."',fk_usuario_id='".$nombre[13]."' where ide='".$clave."'";
 		break;

 	case 'contrato':
 			$sql1= "UPDATE contrato SET  idco='".$clave."',fechaini='".$nombre[0]."',fechafin='".$nombre[1]."',salario='".$nombre[2]."',cargo='".$nombre[3]."',horaentra='".$nombre[4]."',horasali='".$nombre[5]."',vacaciones='".$nombre[6]."',fk_ide3='".$nombre[7]."' where idco='".$clave."'";
 		break;

 	case 'telefono':
 			$sql1= "UPDATE telefono SET  idt='".$clave."',modelo='".$nombre[0]."',marca='".$nombre[1]."',valor='".$nombre[2]."',garantia='".$nombre[3]."',inventario='".$nombre[4]."',ventas='".$nombre[5]."',especificacion='".$nombre[6]."',descuento='".$nombre[7]."',fecha_lanzamiento='".$nombre[8]."',fk_idp='".$nombre[9]."' where idt='".$clave."'";
 		break;

 	case 'factura':
 			$sql1= "UPDATE factura SET  idf='".$clave."',fecha='".$nombre[0]."',valor_neto='".$nombre[1]."',descuento='".$nombre[2]."',impuesto='".$nombre[3]."',valor_total='".$nombre[4]."',fk_cedulac='".$nombre[5]."',fk_ide='".$nombre[6]."',fk_idt='".$nombre[7]."' where idf='".$clave."'";
 		break;

 	case 'cliente':
 			$sql1= "UPDATE cliente SET  cedula='".$clave."',nombre='".$nombre[0]."',apellidos='".$nombre[1]."',telefono='".$nombre[2]."',correo='".$nombre[3]."',ciudad='".$nombre[4]."',direccion='".$nombre[5]."',estrato='".$nombre[6]."',genero='".$nombre[7]."',nacionali='".$nombre[8]."',fk_usuario_id='".$nombre[9]."' where cedula='".$clave."'";
 		break;
 	
 	default:
 		
 		break;
 }


$result1 = pg_query($conn,$sql1);
echo "<script>
                alert('Los datos se modificaron correctamente');
                window.location= 'modificacion.php'
    			</script>";

