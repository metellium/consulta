
<?php

$servidor="localhost";
$usuario="root";
$pwd="";
$BD="servicios_libres";

/*
$servidor="mysql.hostinger.mx";
$usuario="u957829318_user1";
$pwd="gera1356895";
$BD="u957829318_servl";
*/
$conn=mysqli_connect($servidor,$usuario,$pwd,$BD)or die("Error al conectarse a la base de datos".mysqli_error());
?>
