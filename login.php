<?php 

//Conexion con la base de datos.
$conexion=@mysql_connect("localhost","root","");

if (!($conexion)){
echo 'No se puede realizar la conexion con la base de datos.';
}

//Seleccion de la base de datos.
mysql_select_db("semar");

//declaramos como variables a los campos de texto del formulario.
$usuario=$_POST["usuario"];
$clabe=md5($_POST["clave"]);

//Consulta del usuario y el password
$query="SELECT nombre, apellidos,password, direccion, telefono FROM usuarios WHERE nombre='$usuario' and password='$clabe' ";
$rs=mysql_query($query); 
$row=mysql_fetch_object($rs); 
$nr = mysql_num_rows($rs); 

//Si existe el usuario lo va a redireccionar a la pagina de Bienvenida.

if($nr == 1){ 
 header ("Location:indexlog.html"); 

}

//Si no existe lo va a enviar al login otra vez.
else if($nr <= 0) { 
  header("Location:error.html"); 
}   
?> 