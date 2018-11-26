
<?php
function imprimirEntrada($Entradas_Id){
  global $SqlLink;
  $content .= "<table border=1 width='400'><tr><td>";

  $ImpEntquery = "SELECT ent.Nro as Nro,s.Calle as SalaCalle,s.AlturaCalle as SalaAlturaCalle,e.Fecha as FechaEvento,e.Hora as HoraEvento,e.Nombre as NombreEvento,e.Descripcion as DescripcionEvento,s.Descripcion as DescripcionSala FROM Eventos e,Salas s,Entradas ent WHERE e.Eventos_Id=$Eventos_Id AND s.Salas_Id=e.Salas_Id AND ent.Eventos_Id=e.Eventos_Id";
  //echo $ImpEntquery;
  $Ro = $SqlLink->query($ImpEntquery);
  //echo $ImpEntquery;
  //print_r($Ro);
  $ImpEntobj = $Ro->fetch_object()

  $Nro=$ImpEntobj->Nro;
  $Evento = $ImpEntobj->NombreEvento;
  $DescripcionSala = $ImpEntobj->DescripcionSala;
  $Fecha = date("j/m/Y",strtotime($ImpEntobj->FechaEvento));
  $Hora=date("H:i",strtotime($ImpEntobj->HoraEvento));
  $Direccion = $ImpEntobj->SalaCalle." ".$ImpEntobj->SalaAlturaCalle;

  $content .= "Id.: $Entradas_Id";
  $content .= "Nro.: $Nro";
  $content .= "Evento: $Evento";
  //<?echo $ImpEntobj->DescripcionEvento;

  $content .= "Sala: $DescripcionSala";
  $content .= "Fecha: $Fecha";
  $content .= "Hora: $Hora";
  $content .= "Dirección: $Direccion";
  $content .= "</td></tr>";
  $content .= "</table>";
  return $content;
}
?>
