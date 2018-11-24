<?php
require "../../include/inc_connectdb.php";

extract($_POST);

$query = "UPDATE Administradores SET Nombre='$Nombre', Apellido='$Apellido', Email='$Email',Telefono='$Telefono' WHERE Administradores_Id=$Administradores_Id;";

if( $SqlLink->query($query))
	$mensaje="La modificación fue exitosa";
else
	$mensaje="La modificación fracasó";
//phpinfo();
//print $_SERVER['HTTP_HOST'];

header("Location: http://".$_SERVER['HTTP_HOST']."/backend/abm/administradores.php?mensaje=".$mensaje);
?>
