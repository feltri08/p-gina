<?PHP
//Inicio la sesión
session_start();
//vemos si el usuario y contraseña es válido
 include("conexion.php"); 
 $conn=conectar(); 
 extract($_POST);
 //echo $conn;

switch ($tipo) {
	case '1':
		$tabla="cliente";
		break;

	case '3':
		$tabla="cliente";
		break;

	case '2':
		$tabla="empleado";
		break;
	
	default:
		break;
}

$sql1="Select * from ".$tabla." where cedula='".$cedula."' and nombre='".$nombre."' and fk_usuario_id='".$tipo."'";
//echo $sql1;
				$result1 = pg_query($conn,$sql1);
				$numrows5 = pg_numrows($result1);
				if ($numrows5==0) 
				{
				header("Location: valida.php?errorusuario=si");
				}
				else 
				{
				$row1 = pg_fetch_array($result1);
				$tipo_usuario1 = $row1["fk_usuario_id"];
				$apellido = $row1["apellidos"];
				
				$_SESSION["cedula"] =$cedula; 
				$_SESSION["nombre"] =$nombre; 
				$_SESSION["apellido"]= $apellido;
				$_SESSION["tipo_usuario"]= $tipo_usuario1;
	
				
				
				if ($tipo_usuario1=='1')
				{
				header("Location: menu_cliente.php");
					exit(); 	
				}

				if ($tipo_usuario1=='2')
				{
				header("Location: menu_administrador.php");
				exit(); 
				}

				if ($tipo_usuario1=='3')
				{
				header("Location:  menu_cliente.php");
				exit();
				}
			

}
?>