<?php 
//declaramos como variables a los campos de texto del formulario.

$Pan_de_Nuez = $_POST["Pan_de_Nuez"];
$Pan_de_Elote = $_POST["Pan_de_Elote"];
$Pan_de_Chocolate = $_POST["Pan_de_Chocolate"];
$Fecha = $_POST["Fecha"];


if($Pan_de_Nuez && $Pan_de_Elote && $Pan_de_Chocolate && $Fecha ){

//Conexion con la base de datos.
$conexion=@mysql_connect("localhost","root","");

if (!($conexion)){
echo 'No se puede realizar la conexion con la base de datos.';
}

//Seleccion de la base de datos.
mysql_select_db("semar");


//insertar datos

$query="INSERT INTO carrito (Pan_de_Nuez, Pan_de_Elote, Pan_de_Chocolate, Fecha) VALUES ('$Pan_de_Nuez', '$Pan_de_Elote', '$Pan_de_Chocolate', '$Fecha')";
$rs=mysql_query($query); 
//--------------------------------

if ($rs) {
			echo "Has sido registrado";
 
		}
		else {
			echo "error en el registro";
		}

//-------------------------------

}//ifcompletar

else {echo "DEBES ACOMPLETAR TODOS LOS DATOS";}


?>