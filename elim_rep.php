<html lang="es">
<head>
<meta charset="utf-8">
<title>Mi Gran Pancito</title>
 
</head>
<body>
	
	<header id="main-header">
		
		<a id="logo-header" href="index.html">
			<h2><span class="site-name">INICIO</span></h2>
		</a> 
 
		<nav>
		
		</nav><!-- / nav -->
 
	</header>
 
	
	<section id="main-content">
	
		<article>
			<header>
				<h1>ELIMINAR REPORTE</h1>
			</header>
            
			<center>
            
            
            <?php
ob_start();
include("conexion/conexion.php");

		
$consulta = mysqli_query($conexion, "SELECT * FROM reportes") or die(mysql_error());
		
?>

	<table width="40%" border="1">
            <tr>
		<td>ID_REPORTE</td>
		<td>NOMBRE</td>
                <td>DESCRIPCION</td>
                 <td>FECHA</td>
                 <td>ACCION</td>
			  </tr>
<?php
		
		while($filas = mysqli_fetch_array($consulta))
		{	
			$ID_REPORTE=$filas['ID_REPORTE'];
			$NOMBRE=$filas['NOMBRE'];
			$DESCRIPCION=$filas['DESCRIPCION'];
			$FECHA=$filas['FECHA'];
			
			
?>
			  <tr>
                <td><?php echo "<p style='color:#666;'>".$ID_REPORTE."</p>";?></td>
				<td><?php echo "<p style='color:#666;'>".$NOMBRE."</p>";?></td>
                <td><?php echo "<p style='color:#666;'>".$DESCRIPCION."</p>";?></td>
                <td><?php echo "<p style='color:#666;'>".$FECHA."</p>";?></td>
                                
                <td>
                	<form method="post" action="">
                    	<input type="submit" value="Eliminar" name="eliminar" />
                    </form>
                </td>
			  </tr>

<?php
			
			
		}
		
		
if(isset($_POST['eliminar']))
{
		
		mysqli_query($conexion, "DELETE FROM reportes WHERE ID_REPORTE = '$ID_REPORTE'") or die(mysql_error());
		
		header('refresh: 1; url=elim_rep.php');
		
		echo "<p style='color:green;'>ELIMINACION REALIZADA CON EXITO</p>";
}


?>
</table>
			
			</center>
            
			<div class="content">
				
				<br><br><br><br>
<h1><center><li><a href="reportes.php">Regresar</a></li></center></h1>
				
			</div>
			
		</article> 
	
	</section> 	
	
	<h1><footer id="main-footer">
		<p>&copy; Mi Gran Pancito
	</footer></h1>
 
	
</body>
</html>