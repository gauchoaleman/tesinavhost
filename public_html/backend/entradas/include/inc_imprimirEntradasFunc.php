<?php
function imprimirEntrada($Entradas_Id){
  global $SqlLink;
//  $content = "<table style='height:100px; border=1; cellpadding='0; cellspacing=0; width=300px;'>";
//  $content .= "<tr style='height:100px;'><td style='height:100px; vertical-align: middle; width:300px;' >";

  $content="<table border='2'><tr>";
  $ImpEntquery = "SELECT ent.Nro as Nro,s.Calle as SalaCalle,s.AlturaCalle as SalaAlturaCalle,e.Fecha as FechaEvento,e.Hora as HoraEvento,e.Nombre as NombreEvento,e.Descripcion as DescripcionEvento,s.Descripcion as DescripcionSala FROM Eventos e,Salas s,Entradas ent WHERE e.Eventos_Id=ent.Eventos_Id AND s.Salas_Id=e.Salas_Id AND ent.Entradas_Id=$Entradas_Id";
  //echo $ImpEntquery;
  $Ro = $SqlLink->query($ImpEntquery);
  //echo $ImpEntquery;
  //print_r($Ro);
  $ImpEntobj = $Ro->fetch_object();

  $Nro=$ImpEntobj->Nro;
  $Evento = $ImpEntobj->NombreEvento;
  $DescripcionSala = $ImpEntobj->DescripcionSala;
  $Fecha = date("j/m/Y",strtotime($ImpEntobj->FechaEvento));
  $Hora=date("H:i",strtotime($ImpEntobj->HoraEvento));
  $Direccion = $ImpEntobj->SalaCalle." ".$ImpEntobj->SalaAlturaCalle;
  $content .= "<td height='150' width='200'>";
  $content .= "Id.: $Entradas_Id<br>";
  $content .= "Nro.: $Nro<br>";
  $content .= "Evento: $Evento<br>";
  $content .= "Sala: $DescripcionSala<br>";
  $content .= "Dirección: $Direccion<br>";
  $content .= "Fecha: $Fecha<br>";
  $content .= "Hora: $Hora<br>";

  $content .= "</td><td width='200'align='center'>";
  $content .= "<qrcode value='ID entrada: $Entradas_Id' ec='H' style='width: 50mm; background-color: white; color: black;''></qrcode>";
  $content .= "</td></tr>";
  $content .= "</table><br>";
  //echo $content;
  return $content;



}
?>
