<?php
extract($_GET);
echo "<table border=1 width='850'><tr><td>";

$ImpEntquery = "SELECT ent.Nro as Nro,s.Calle as SalaCalle,s.AlturaCalle as SalaAlturaCalle,";
$ImpEntquery .= "e.Fecha as FechaEvento,e.Hora as HoraEvento,e.Nombre as NombreEvento,";
$ImpEntquery .= "e.Descripcion as DescripcionEvento,s.Descripcion as DescripcionSala
,e.LinkFacebook as LinkFacebook,e.LinkTwitter as LinkTwitter,e.LinkInstagram as LinkInstagram
FROM Eventos e,Salas s,Entradas ent WHERE e.Eventos_Id=$Eventos_Id AND s.Salas_Id=e.Salas_Id AND ent.Eventos_Id=e.Eventos_Id";
//echo $ImpEntquery;
$Ro = $SqlLink->query($ImpEntquery);
//echo $ImpEntquery;
//print_r($Ro);
$obj = $Ro->fetch_object();

$Nro=$obj->Nro;
$Evento = $obj->NombreEvento;
$DescripcionEvento = $obj->DescripcionEvento;
$DescripcionSala = $obj->DescripcionSala;
$LinkFacebook = $obj->LinkFacebook;
$LinkTwitter = $obj->LinkTwitter;
$LinkInstagram = $obj->LinkInstagram;
$Fecha = date("j/m/Y",strtotime($obj->FechaEvento));
$Hora=date("H:i",strtotime($obj->HoraEvento));
$Direccion = $obj->SalaCalle." ".$obj->SalaAlturaCalle;

echo "<h2><u>$Evento</u></h2><br>";
echo "<h3>$DescripcionEvento</h3><br>";

echo "<h4>Sala: $DescripcionSala</h4><br>";
echo "<h4>Fecha: $Fecha</h4><br>";
echo "<h4>Hora: $Hora</h4><br>";
echo "<h4>Dirección: $Direccion</h4><br>";
if($LinkFacebook)
  echo "<h4><a href='$LinkFacebook'>Facebook</a></h4><br>";
if($LinkTwitter)
  echo "<h4><a href='$LinkTwitter'>Twitter</a></h4><br>";
if($LinkInstagram)
    echo "<h4><a href='$LinkInstagram'>Instagram</a></h4><br>";
echo "</td></tr>";
echo "</table>";
?>
