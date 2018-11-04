<?php
require_once "../../../include/inc_connectdb.php";

extract($_POST);
$query = "INSERT INTO Eventos (Nombre,Descripcion,Costo,Fecha,Hora,Administradores_Id,Salas_Id) ";
$query .= "VALUES ('".$Nombre."','".$Descripcion."','".$Costo."','".$Fecha."','".$Hora."',$Administradores_Id,$Salas_Id);";

if( $SqlLink->query($query))
	$mensaje="La inserción fue exitosa";
else
	$mensaje="La inserción fracasó";

header("Location: http://".$_SERVER['HTTP_HOST']."/backend/abm/eventos.php?mensaje=".$mensaje);
?>
