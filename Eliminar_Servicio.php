<?php

include "conexion.php";

$id=$_POST["ID"];
$sql="DELETE FROM servicios WHERE Id_Servicio=$id";
$result=mysqli_query($conn,$sql);
$datos= "";
if($result){
$datos= "Servicio Eliminado correctamente";
}else{
	echo "Error al ejecutar la consulta:".mysqli_error();
}
mysqli_close($conn);
echo json_encode($datos);
?>