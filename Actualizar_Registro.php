<?php
include "conexion.php";

$id=$_POST["Id2"];
$nom=$_POST["Nom2"];
$dir=$_POST["Dir2"];
$rfc=$_POST["Rfc2"];
$tel=$_POST["Tel2"];
$clasif=$_POST["Clasif2"];
$foto=$_POST["Foto2"];
$lat=$_POST["Lat2"];
$longit=$_POST["Long2"];

$sql="UPDATE servicios SET Nombre_servicio='$nom', Direccion ='$dir', RFC='$rfc', Telefono='$tel', Clasificacion='$clasif', Foto='$foto', Latitud='$lat', Longitud='$longit' where Id_Servicio='$id'";
$reg=mysqli_query($conn,$sql);
if($reg){
echo "Nombre:".$nom." Dirección:".$dir." RFC:".$rfc." Tel:".$tel." Clasificación:".$clasif." Foto:".$foto." Latitud:".$lat." Longitud:".$longit;
}else{
echo "Error al registrar los datos:".mysqli_error();	
}

mysqli_close($conn);
?>