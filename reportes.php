<html lang="es">
<head>
<meta charset="utf-8">
<title>Mi Gran Pancito</title>
 
</head>
<body>
	
	<header id="main-header">
		
 <a id="logo-header" href="indexlog.html">
			<h1><span class="site-name">ATRAS</span></h1>
		<nav>
			<ul>
                <h1><li><a href="productos.php">Productos</a></li></h1>
			</ul>
		</nav>
 
	</header>
 
	
	<section id="main-content">
	
		<article>
			<center><header>
				<font color="Teal"><h1>REPORTES</h1></font> 
			</header></center>
			
			           
            <center> <br><br><br>
			
			
			
			
         
            <li><h1><a href="altas_rep.HTML">AGREGAR</a></li></h1><br><br>
            <br>
            <?php
include("conexion/conexion.php");
$consulta = mysqli_query($conexion, "SELECT * FROM reportes") or die(mysql_error());
		
?>

<table width="70%" border="1">
<font color="Teal"><tr>
 | ID_REPORTE | NOMBRE | DESCRIPCION | FECHA |<BR>
</tr></font> 
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
                <td><?php echo "<p style='color:#ccc;'>".$DESCRIPCION."</p>";?></td>
                <td><?php echo "<p style='color:#ccc;'>".$FECHA."</p>";?></td>
     
			  </tr>
<?php
			
			
		}


?>
</table>
            
            
            </center>
			
			<div class="content">
				
				
				
			</div>
			
		</article> 
	
	</section> <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	
	<center><h1><footer id="main-footer">
		<p>&copy; Mi Gran Pancito
	</footer></h1></center
 
	
</body>
</html>