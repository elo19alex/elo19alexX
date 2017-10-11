<?php
ob_start();
include("conexion/conexion.php");
$ID = $_GET["ID"];

$consultas = mysqli_query($conexion, "SELECT * FROM sucursal WHERE ID_SUCURSAL='".$ID."'") or die(mysql_error());

		while($filax = mysqli_fetch_array($consultas))
		{	
			$ID_SUCURSAL=$filax['ID_SUCURSAL'];
			$NOMBRE=$filax['NOMBRE'];
			$DIRECCION=$filax['DIRECCION'];
			$TELEFONO=$filax['TELEFONO'];
			
		}
		
if(isset($_POST['modificar']))
{
	if(isset($_POST['NOMBRE2']) && !empty($_POST['NOMBRE2']) &&
	isset($_POST['DIRECCION2']) && !empty($_POST['DIRECCION2']) &&
	isset($_POST['TELEFONO2']) && !empty($_POST['TELEFONO2']))
	
	{
		
		$NOMBRE2 = $_POST['NOMBRE2'];
		$DIRECCION2 = $_POST['DIRECCION2'];
		$TELEFONO2 = $_POST['TELEFONO2'];
				
		mysqli_query($conexion, "UPDATE sucursal SET NOMBRE = '$NOMBRE2', DIRECCION = '$DIRECCION2', TELEFONO = '$TELEFONO2' WHERE ID_SUCURSAL = '$ID'") or die(mysql_error());
		
		header('refresh: 1; url=mod_suc.php');
		
		echo "<p style='color:green;'>MODIFICACION REALIZADA CON EXITO</p>";
	}
	else
	{
		echo "error";
	}
}
?>

<form name="formulario" method="post" action="">
     
    <input placeholder="" type="text" name="NOMBRE2" value="<?php echo $NOMBRE;?>" maxlength="30" size="40"><br><br>
    <input placeholder="" type="text" name="DIRECCION2" value="<?php echo $DIRECCION;?>" maxlength="30" size="40"><br><br>
    <input placeholder="" type="text" name="TELEFONO2" value="<?php echo $TELEFONO;?>" maxlength="30" size="40"><br><br>
 
  
    
     
    <input  type="submit"  value="Modificar" name="modificar">
    
</form>
<br />
<a href="mod_suc.PHP">Regresar</a>

</body>
</html>