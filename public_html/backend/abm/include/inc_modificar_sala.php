<?php
require_once "../../../include/inc_connectdb.php";

extract($_POST);

$query = "UPDATE Salas SET Descripcion='$Descripcion', Capacidad=$Capacidad, Provincia='$Provincia',CP='$CP',Ciudad='$Ciudad',Calle='$Calle',AlturaCalle='$AlturaCalle',Contactos_Id=$Contactos_Id WHERE Salas_Id=$Salas_Id;";

if( $SqlLink->query($query))
	$mensaje="La modificación fue exitosa";
else
	$mensaje="La modificación fracasó";
//phpinfo();
//print $_SERVER['HTTP_HOST'];
echo $query;
exit();
header("Location: http://".$_SERVER['HTTP_HOST']."/backend/abm/salas.php?mensaje=".$mensaje);
?>
