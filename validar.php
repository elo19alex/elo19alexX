<?php 
//declaramos como variables a los campos de texto del formulario.

$nombre=$_POST["nombre"];
$apellidos = $_POST["apellidos"];
$password = $_POST["pass"];
$cpassword = $_POST["cpass"];
$direccion=$_POST["direc"];
$telefono=$_POST["tel"];

$contra= md5 ($cpassword);

if($nombre && $apellidos && $password && $direccion && $telefono){

if ($password == $cpassword){

//Conexion con la base de datos.
$conexion=@mysql_connect("localhost","root","");

if (!($conexion)){
echo 'No se puede realizar la conexion con la base de datos.';
}

//Seleccion de la base de datos.
mysql_select_db("semar");


//insertar datos

$query="INSERT INTO usuarios (nombre, apellidos, password, direccion, telefono) VALUES ('$nombre', '$apellidos', '$contra', '$direccion', '$telefono')";
$rs=mysql_query($query); 
//--------------------------------

if ($rs) {
			echo "Has sido registrado";
		}
		else {
			echo "error en el registro";
		}

//-------------------------------
}//ifpass

else { echo "LA CONTRASEÑA NO ES LA MISMA";}

}//ifcompletar

else {echo "DEBES ACOMPLETAR TODOS LOS DATOS";}

?>