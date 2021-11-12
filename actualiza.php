<?php

include("includes/conexion.php");
$con = mysqli_connect($host, $user, $pwd, $db);
if (mysqli_connect_errno()) {
    echo "Falló la conexión:" . mysqli_connect_error();
}

$linea = (string)$_POST['linea'];
$multipara = (string)$_POST['multipara'];
$semental = (string)$_POST['semental'];
$lechon = (string)$_POST['lechon'];

$dtz = new DateTimeZone("America/Mexico_City");
$dt = new DateTime("now", $dtz);
//Stores time as "2021-04-04T13:35:48":
$currentTime = $dt->format("Y-m-d");


$sql = "INSERT INTO precios (fecha, cerdo_linea, hembra_multipara, semental, lechon)
								VALUES('$currentTime', '$linea', '$multipara', '$semental', '$lechon');";

if (mysqli_query($con, $sql)) {
    echo '<script type="text/javascript">
    alert("Precios actualizados correctamente");
    window.location.href="precios.php";
    </script>';
} else {
    printf("Errormessage: %s\n", $con->error);
}
mysqli_close($con);
