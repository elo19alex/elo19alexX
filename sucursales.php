<html lang="es">
<head>
<meta charset="utf-8">
<title> Mi Gran Pancito</title>
 
</head>
<body>
	
	<header id="main-header">
		
 <a id="logo-header" href="indexlog.html">
			<h1><span class="site-name">ATRAS</span></h1>
		<nav>
			<ul>
                <h1><li><a href="reportes.php">Reportes</a></li></h1>
			</ul>
		</nav><!-- / nav -->
 
	</header>
 
 
	<section id="main-content">
	
		<article>
			<header>
				<h1><font color="Teal"><center><h1>SUCURSALES</h1></center></h1></font>
			</header>
			
<center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7329.225536423873!2d-99.13985044388576!3d19.337156794050994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc89447cbeac4b6d7!2sPane+en+Via!5e0!3m2!1ses-419!2smx!4v1479623596284" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe></center>
			
            <center>
            
            
            <?php
include("conexion/conexion.php");
$consulta = mysqli_query($conexion, "SELECT * FROM sucursal") or die(mysql_error());
		
?>

<table width="40%" border="1">
<tr><br><br>
| ID_SUCURSAL | NOMBRE | DIRECCION | TELEFONO |<BR>
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
                <td><?php echo "<p style='color:#ccc;'>".$DIRECCION."</p>";?></td>
                <td><?php echo "<p style='color:#ccc;'>".$TELEFONO."</p>";?></td>
     
			  </tr>
<?php
			
			
		}


?>
</table>
            
            
            </center>
			
			<div class="content">
				
				
				
			</div>
			
		</article> 
	
	</section> 	<br>
	
	<h1><center><footer id="main-footer">
		<p>&copy;  Mi Gran Pancito
	</footer> </center></h1>
 
	
</body>
</html>