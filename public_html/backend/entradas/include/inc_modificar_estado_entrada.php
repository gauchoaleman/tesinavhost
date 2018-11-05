<?php
require "../../../include/inc_connectdb.php";
print_r($_POST);
extract($_POST);

$query = "UPDATE Entradas SET Estado='$Estado' WHERE Entradas_Id=$Entradas_Id";

if( $SqlLink->query($query))
	$mensaje="La modificación fue exitosa";
else
	$mensaje="La modificación fracasó";
echo $query;
header("Location: http://".$_SERVER['HTTP_HOST']."/backend/entradas/entradas.php?mensaje=".$mensaje);
 ?>
