<html lang="es">
<head>
<meta charset="utf-8">
<title>Mi Gran Pancito</title>
 </head>
<body>
	
	<header id="main-header">
		
		<a id="logo-header" href="index.html">
			<span class="site-name">INICIO</span>
		</a> 
 
		<nav>
			
		</nav><!-- / nav -->
 
	</header>
 
	
	<section id="main-content">
	
		<article>
			<header>
				<h1>MODIFICAR REPORTE</h1>
			</header>
            
			<center>
			
            <?php
include("conexion/conexion.php");


		
$consulta = mysqli_query($conexion, "SELECT * FROM reportes ") or die(mysql_error());
		
?>

	<table width="40%" border="1">
       <tr>
	<td>ID_REPORTE</td>
	<td>NOMBRE</td>
        <td>DESCRIPCION</td>
         <td>FECHA</td>
          
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
				<td><?php echo "<p style='color:#ccc;'>".$NOMBRE."</p>";?></td>
                <td><?php echo "<p style='color:#666;'>".$DESCRIPCION."</p>";?></td>
				<td><?php echo "<p style='color:#ccc;'>".$FECHA."</p>";?></td>
                				
                <td><a href="modificar_reportes.php?ID=<?php echo $ID_REPORTE;?>">modificar</a></td>
			  </tr>

<?php
					
		}


?>
</table>
            
			</center>
            
			<div class="content">
				
				<br><br><br><br>
<center><li><a href="reportes.php">Regresar</a></li></center>
				
			</div>
			
		</article> 
	
	</section> 	
	
	<h1><footer id="main-footer">
		<p>&copy; Mi Gran Pancito
	</footer></h1>
 
	
</body>
</html>