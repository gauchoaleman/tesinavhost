<?php
require_once "../../../include/inc_connectdb.php";

extract($_POST);
list($anio, $mes, $dia) = sscanf($fechaNacimiento, "%d-%d-%d");
$query = "INSERT INTO Administradores (Nombre,Apellido,Email,Telefono) VALUES ('$Nombre', '$Apellido', '$Email', '$Telefono');";
echo $query;
if( $SqlLink->query($query))
	$mensaje="La inserción fue exitosa";
else
	$mensaje="La inserción fracasó";
//phpinfo();
//print $_SERVER['HTTP_HOST'];

//header("Location: http://".$_SERVER['HTTP_HOST']."/backend/abm/administradores.php?mensaje=".$mensaje);
?>
