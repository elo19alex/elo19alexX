<?php
ob_start();
include("conexion/conexion.php");
$ID = $_GET["ID"];

$consultas = mysqli_query($conexion, "SELECT * FROM reportes WHERE ID_REPORTE='".$ID."'") or die(mysql_error());

		while($filax = mysqli_fetch_array($consultas))
		{	
			$ID_REPORTE=$filax['ID_REPORTE'];
			$NOMBRE=$filax['NOMBRE'];
			$DESCRIPCION=$filax['DESCRIPCION'];
			$FECHA=$filax['FECHA'];
			
		}
		
if(isset($_POST['modificar']))
{
	if(isset($_POST['NOMBRE2']) && !empty($_POST['NOMBRE2']) &&
	isset($_POST['DESCRIPCION2']) && !empty($_POST['DESCRIPCION2']) &&
	isset($_POST['FECHA2']) && !empty($_POST['FECHA2']))
	
	{
		
		$NOMBRE2 = $_POST['NOMBRE2'];
		$DESCRIPCION2 = $_POST['DESCRIPCION2'];
		$FECHA2 = $_POST['FECHA2'];
				
		mysqli_query($conexion, "UPDATE reportes SET NOMBRE = '$NOMBRE2', DESCRIPCION = '$DESCRIPCION2', FECHA = '$FECHA2' WHERE ID_REPORTE = '$ID'") or die(mysql_error());
		
		header('refresh: 1; url=mod_rep.php');
		
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
    <input placeholder="" type="text" name="DESCRIPCION2" value="<?php echo $DESCRIPCION;?>" maxlength="30" size="40"><br><br>
    <input placeholder="" type="text" name="FECHA2" value="<?php echo $FECHA;?>" maxlength="30" size="40"><br><br>
  
  
    
     
    <input  type="submit"  value="Modificar" name="modificar">
    
</form>
<br />
<a href="mod_rep.PHP">Regresar</a>

</body>
</html>