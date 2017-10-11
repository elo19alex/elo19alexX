<?php 
//declaramos como variables a los campos de texto del formulario.

$ID_REPORTE= $_POST["ID_REPORTE"];
$NOMBRE = $_POST["NOMBRE"];
$DESCRIPCION = $_POST["DESCRIPCION"];
$FECHA= $_POST["FECHA"];


if($ID_REPORTE && $NOMBRE && $DESCRIPCION && $FECHA ){

//Conexion con la base de datos.
$conexion=@mysql_connect("localhost","root","");

if (!($conexion)){
echo 'No se puede realizar la conexion con la base de datos.';
}

//Seleccion de la base de datos.
mysql_select_db("semar");


//insertar datos

$query="INSERT INTO reportes (ID_REPORTE, NOMBRE, DESCRIPCION, FECHA) VALUES ('$ID_REPORTE', '$NOMBRE', '$DESCRIPCION', '$FECHA')";
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