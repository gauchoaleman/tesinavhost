<table border=1 width="400">
  <tr><td>
<?
$ImpEntquery = "SELECT s.Calle as SalaCalle,s.AlturaCalle as SalaAlturaCalle,e.Fecha as FechaEvento,e.Hora as HoraEvento,e.Nombre as NombreEvento,e.Descripcion as DescripcionEvento,s.Descripcion as DescripcionSala FROM Eventos e,Salas s WHERE e.Eventos_Id=$Eventos_Id AND s.Salas_Id=e.Salas_Id";
//echo $ImpEntquery;
$Ro = $SqlLink->query($ImpEntquery);
//echo $ImpEntquery;
//print_r($Ro);
$ImpEntobj = $Ro->fetch_object()
?>
Id: <?echo $obj->Entradas_Id;?><br>
Evento: <?echo $ImpEntobj->NombreEvento;?><br>
Descripcion: <?echo $ImpEntobj->DescripcionEvento;?><br>
Sala: <?echo $ImpEntobj->DescripcionSala;?><br>
Fecha: <?echo $ImpEntobj->FechaEvento;?><br>
Hora: <?echo $ImpEntobj->HoraEvento;?><br>
Dirección: <?echo $ImpEntobj->SalaCalle;?> <?echo $ImpEntobj->SalaAlturaCalle;?><br>
</td></tr>
</table>
<br>
