<?php
require_once "../../../include/inc_connectdb.php";

extract($_POST);
$query = "INSERT INTO Salas (Descripcion,Capacidad,Provincia,CP,Ciudad,Calle,AlturaCalle,Contactos_Id) ";
$query .= "VALUES ('$Descripcion','$Capacidad','$Provincia','$CP','$Ciudad','$Calle','$AlturaCalle','$Contactos_Id');";

if( $SqlLink->query($query))
	$mensaje="La inserción fue exitosa";
else
	$mensaje="La inserción fracasó";

header("Location: http://".$_SERVER['HTTP_HOST']."/backend/abm/contactos.php?mensaje=".$mensaje);
?>
