<?
require_once "../../vendor/autoload.php";
use Spipu\Html2Pdf\Html2Pdf;
echo "hola";
$html2pdf->writeHTML("<table border=1 width='400'><tr><td>");

$ImpEntquery = "SELECT ent.Nro as Nro,s.Calle as SalaCalle,s.AlturaCalle as SalaAlturaCalle,e.Fecha as FechaEvento,e.Hora as HoraEvento,e.Nombre as NombreEvento,e.Descripcion as DescripcionEvento,s.Descripcion as DescripcionSala FROM Eventos e,Salas s,Entradas ent WHERE e.Eventos_Id=$Eventos_Id AND s.Salas_Id=e.Salas_Id AND ent.Eventos_Id=e.Eventos_Id";
//echo $ImpEntquery;
$Ro = $SqlLink->query($ImpEntquery);
//echo $ImpEntquery;
//print_r($Ro);
$ImpEntobj = $Ro->fetch_object()

$EntradasId=$obj->Entradas_Id;
$Nro=$obj->Nro;
$Evento = $ImpEntobj->NombreEvento;
$DescripcionSala = $ImpEntobj->DescripcionSala;
$Fecha = date("j/m/Y",strtotime($ImpEntobj->FechaEvento));
$Hora=date("H:i",strtotime($ImpEntobj->HoraEvento));
$Direccion = $ImpEntobj->SalaCalle." ".$ImpEntobj->SalaAlturaCalle;

$html2pdf->writeHTML("Id.: $EntradasId");
$html2pdf->writeHTML("Nro.: $Nro");
$html2pdf->writeHTML("Evento: $Evento");
//<?echo $ImpEntobj->DescripcionEvento;
$html2pdf->writeHTML("Sala: $DescripcionSala");
$html2pdf->writeHTML("Fecha: $Fecha");
$html2pdf->writeHTML("Hora: $Hora");
$html2pdf->writeHTML("Dirección: $Direccion")
$html2pdf->writeHTML("</td></tr>");
$html2pdf->writeHTML("</table>");
?>
