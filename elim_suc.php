<html lang="es">
<head>
<meta charset="utf-8">
<title>SEMARNAT</title>
 
 <link rel="stylesheet" href="style.css">

</head>
<body>
	
	<header id="main-header">
		
		<a id="logo-header" href="index.html">
			<span class="site-name">SEMARNAT</span>
		</a> 
 
		<nav>
			<ul>
				 <li><a href="sucursales.php">REGRESAR</a></li>
           
				
			</ul>
		</nav><!-- / nav -->
 
	</header>
 
	
	<section id="main-content">
	
		<article>
			<header>
				<h1>ELIMINAR SUCURSAL</h1>
			</header>
            
			<center>
            
            
            <?php
ob_start();
include("conexion/conexion.php");

		
$consulta = mysqli_query($conexion, "SELECT * FROM sucursal") or die(mysql_error());
		
?>

	<table width="40%" border="1">
            <tr>
		<td>ID_SUCURSAL</td>
		<td>NOMBRE</td>
                <td>DIRECCION</td>
                 <td>TELEFONO</td>
                 <td>ACCION</td>
			  </tr>
<?php
		
		while($filas = mysqli_fetch_array($consulta))
		{	
			$ID_SUCURSAL=$filas['ID_SUCURSAL'];
			$NOMBRE=$filas['NOMBRE'];
			$DIRECCION=$filas['DIRECCION'];
			$TELEFONO=$filas['TELEFONO'];
			
			
?>
			  <tr>
                <td><?php echo "<p style='color:#666;'>".$ID_SUCURSAL."</p>";?></td>
				<td><?php echo "<p style='color:#666;'>".$NOMBRE."</p>";?></td>
                <td><?php echo "<p style='color:#666;'>".$DIRECCION."</p>";?></td>
                <td><?php echo "<p style='color:#666;'>".$TELEFONO."</p>";?></td>
                                
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
		
		mysqli_query($conexion, "DELETE FROM sucursal WHERE ID_SUCURSAL = '$ID_SUCURSAL'") or die(mysql_error());
		
		header('refresh: 1; url=elim_suc.php');
		
		echo "<p style='color:green;'>ELIMINACION REALIZADA CON EXITO</p>";
}


?>
</table>
			
			</center>
            
			<div class="content">
				
				<center><li><a href="sucursales.php">Regresar</a></li></center>
				
			</div>
			
		</article> 
	
	</section><br><br><br><br><br><br><br>
	
	<center><footer id="main-footer">
		<p>&copy; Mi Gran Pancito
	</footer></center>
 
	
</body>
</html>