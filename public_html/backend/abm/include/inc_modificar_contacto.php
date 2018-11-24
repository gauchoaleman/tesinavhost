<?php
require "../../../include/inc_connectdb.php";

extract($_POST);

$query = "UPDATE Contactos SET Nombre='$Nombre', Apellido='$Apellido', Email='$Email',Telefono='$Telefono' WHERE Contactos_Id=$Contactos_Id;";

if( $SqlLink->query($query))
	$mensaje="La modificación fue exitosa";
else
	$mensaje="La modificación fracasó";
//phpinfo();
//print $_SERVER['HTTP_HOST'];

header("Location: http://".$_SERVER['HTTP_HOST']."/backend/abm/contactos.php?mensaje=".$mensaje);
?>
