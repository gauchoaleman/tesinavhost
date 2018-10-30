<?php
require_once "../../../include/inc_connectdb.php";

extract($_POST);
$query = "INSERT INTO Administradores (Nombre,Apellido,Email,Telefono,Clave) VALUES ('$Nombre', '$Apellido', '$Email', '$Telefono','$Clave1');";

if( $SqlLink->query($query))
	$mensaje="La inserción fue exitosa";
else
	$mensaje="La inserción fracasó";

header("Location: http://".$_SERVER['HTTP_HOST']."/backend/abm/administradores.php?mensaje=".$mensaje);
?>
