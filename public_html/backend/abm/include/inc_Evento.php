<?php
require_once "../../../include/inc_connectdb.php";

function CapacidadSala($Salas_Id){
	global $SqlLink;

	$query = "SELECT Capacidad FROM Salas WHERE Salas_Id=$Salas_Id";
	$result = $SqlLink->query($query);
	$datosObj = $result->fetch_object();
	return $datosObj->Capacidad;
}

extract($_POST);
list($Year,$Month,$Day,$Hour,$Minute) = sscanf($FechaHora,'%d-%d-%dT%d:%d');
$query = "INSERT INTO Eventos (Nombre,Descripcion,Costo,Fecha,Hora,Administradores_Id,Salas_Id,LinkFacebook,LinkTwitter,LinkInstagram) ";
$query .= "VALUES ('".$Nombre."','".$Descripcion."','".$Costo."','$Year-$Month-$Day','$Hour:$Minute',$Administradores_Id,$Salas_Id,'$LinkFacebook','$LinkTwitter','$LinkInstagram');";

if( $SqlLink->query($query))
	$mensaje="La inserción fue exitosa";
else
	$mensaje="La inserción fracasó";
$insertId= mysqli_insert_id($SqlLink);

$Capacidad = CapacidadSala($Salas_Id);

for( $nro=1;$nro<=$Capacidad;$nro++){
	$query = "INSERT INTO Entradas (Eventos_Id,Estado,Nro) VALUES (".$insertId.",'Libre',$nro);";
	$SqlLink->query($query);
}
//echo $query;

header("Location: http://".$_SERVER['HTTP_HOST']."/backend/abm/eventos.php?mensaje=".$mensaje);
?>
