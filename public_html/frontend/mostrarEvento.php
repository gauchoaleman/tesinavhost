<!DOCTYPE html>
<html lang="es">
  <head>
    <?php include "include/inc_head.php"; ?>
  </head>

  <body>
    <div class="container">

<?
extract($_GET);
echo "<table border=1 width='850'><tr><td>";

$ImpEntquery = "SELECT ent.Nro as Nro,s.Calle as SalaCalle,s.AlturaCalle as SalaAlturaCalle,";
$ImpEntquery .= "e.Fecha as FechaEvento,e.Hora as HoraEvento,e.Nombre as NombreEvento,";
$ImpEntquery .= "e.Descripcion as DescripcionEvento,s.Descripcion as DescripcionSala FROM Eventos e,Salas s,Entradas ent WHERE e.Eventos_Id=$Eventos_Id AND s.Salas_Id=e.Salas_Id AND ent.Eventos_Id=e.Eventos_Id";
//echo $ImpEntquery;
$Ro = $SqlLink->query($ImpEntquery);
//echo $ImpEntquery;
//print_r($Ro);
$obj = $Ro->fetch_object();

$Nro=$obj->Nro;
$Evento = $obj->NombreEvento;
$DescripcionEvento = $obj->DescripcionEvento;
$DescripcionSala = $obj->DescripcionSala;
$Fecha = date("j/m/Y",strtotime($obj->FechaEvento));
$Hora=date("H:i",strtotime($obj->HoraEvento));
$Direccion = $obj->SalaCalle." ".$obj->SalaAlturaCalle;

echo "<b>$Evento</b><br>";
echo "$DescripcionEvento<br>";

echo "Sala: $DescripcionSala<br>";
echo "Fecha: $Fecha<br>";
echo "Hora: $Hora<br>";
echo "Dirección: $Direccion<br>";
echo "</td></tr>";
echo "</table>";
?>


      <footer class="footer">
        <p></p>
      </footer>

    </div> <!-- /container -->

  </body>
</html>
