<?php 
//declaramos como variables a los campos de texto del formulario.

$ID_SUCURSAL= $_POST["ID_SUCURSAL"];
$NOMBRE = $_POST["NOMBRE"];
$DIRECCION = $_POST["DIRECCION"];
$TELEFONO= $_POST["TELEFONO"];


if($ID_SUCURSAL && $NOMBRE && $DIRECCION && $TELEFONO ){

//Conexion con la base de datos.
$conexion=@mysql_connect("localhost","root","");

if (!($conexion)){
echo 'No se puede realizar la conexion con la base de datos.';
}

//Seleccion de la base de datos.
mysql_select_db("semar");


//insertar datos

$query="INSERT INTO sucursal (ID_SUCURSAL, NOMBRE, DIRECCION, TELEFONO) VALUES ('$ID_SUCURSAL', '$NOMBRE', '$DIRECCION', '$TELEFONO')";
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