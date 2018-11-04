<?php
require_once "../../../include/inc_connectdb.php";

extract($_POST);
print_r($_POST);
list($Year,$Month,$Day,$Hour,$Minute) = sscanf($FechaHora,'%d-%d-%dT%d:%d');
$query = "UPDATE Eventos SET Nombre='$Nombre',Descripcion='$Descripcion',Costo='$Costo',Fecha='$Year-$Month-$Day',Hora='$Hour:$Minute',Administradores_Id=$Administradores_Id,Salas_Id=$Salas_Id;";

//echo $query;
if( $SqlLink->query($query))
	$mensaje="La modificación fue exitosa";
else
	$mensaje="La modificación fracasó";
//phpinfo();
//print $_SERVER['HTTP_HOST'];
//echo $query;

header("Location: http://".$_SERVER['HTTP_HOST']."/backend/abm/eventos.php?mensaje=".$mensaje);
?>
