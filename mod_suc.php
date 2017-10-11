<html lang="es">
<head>
<meta charset="utf-8">
<title>Mi Gran Pancito</title>
 </head>
<body>
	
	<header id="main-header">
		
		<a id="logo-header" href="index.html">
			<h1><span class="site-name">Inicio</span></h1>
		</a> 
 
		<nav>
			
		</nav><!-- / nav -->
 
	</header>
 
	
	<section id="main-content">
	
		<article>
			<center><header>
				<h1>MODIFICAR SUCURSAL</h1>
			</header></center><br><br><br><br><br>
            
			<center>
			
            <?php
include("conexion/conexion.php");


		
$consulta = mysqli_query($conexion, "SELECT * FROM sucursal ") or die(mysql_error());
		
?>

	<table width="40%" border="1">
       
	<td>ID_SUCURSAL</td>
	<td>NOMBRE</td>
        <td>DIRECCION</td>
         <td>TELEFONO</td>
          
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
				<td><?php echo "<p style='color:#ccc;'>".$NOMBRE."</p>";?></td>
                <td><?php echo "<p style='color:#666;'>".$DIRECCION."</p>";?></td>
				<td><?php echo "<p style='color:#ccc;'>".$TELEFONO."</p>";?></td>
                				
                <td><a href="modificar_sucursal.php?ID=<?php echo $ID_SUCURSAL;?>">modificar</a></td>
			  </tr>
<?php
		
		}


?>
</table>
            
			</center>
            
			<div class="content">
				
				<br><br><br><br>
<center><li><a href="sucursales.php">Regresar</a></li></center>
				
			</div>
			
		</article> 
	
	</section> 	
	
	<h1><footer id="main-footer">
		<p>&copy; Mi Gran Pancito
	</footer></h1>
 
	
</body>
</html>