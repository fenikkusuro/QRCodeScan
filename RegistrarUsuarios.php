<?php

include_once('Settings/conexion.php');
include_once('static/lib/phpqrcode/qrlib.php');

$Nombre = $POST['name'];
$Email = $POST['email'];

$Nombre = $_POST['name'];
$Email = $_POST['email'];

$filename = "QRUsuarios/".$Email.".png";
$tamCodeQR = 10;
$CorrectionError = "L"; // m Q (H mejor)

QRcode::png($Email, $filename, $CorrectionError, $tamCodeQR, 2);



$UsuarioNuevo = "INSERT INTO Usuario (Nombre, Email, ) value ('$Nombre', '$Email')";
mysql_query($UsuarioNuevo);

header("Location:UsuarioRegistrado.php?email=".$Email. "&nombre=" .$Nombre);

?>