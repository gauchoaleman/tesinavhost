<?php
$ListaEventosquery = "SELECT s.Calle as SalaCalle,s.AlturaCalle as SalaAlturaCalle,e.Fecha as
FechaEvento,e.Hora as HoraEvento,e.Nombre as NombreEvento,e.Descripcion as DescripcionEvento,
s.Descripcion as DescripcionSala,e.Eventos_Id as Eventos_Id
FROM Eventos e,Salas s
WHERE s.Salas_Id=e.Salas_Id";
$Ro = $SqlLink->query($ListaEventosquery);
//echo $ListaEventosquery;
?>


<table border=1>
  <?php while($ListaEventosobj = $Ro->fetch_object()){
    $Evento = $ListaEventosobj->NombreEvento;
    $Eventos_Id = $ListaEventosobj->Eventos_Id;
    $DescripcionSala = $ListaEventosobj->DescripcionSala;
    
    $Fecha = date("j/m/Y",strtotime($ListaEventosobj->FechaEvento));
    $Hora=date("H:i",strtotime($ListaEventosobj->HoraEvento));
    $Direccion = $ListaEventosobj->SalaCalle." ".$ListaEventosobj->SalaAlturaCalle;
    echo "<tr><td width='600'>";
    echo "<a href='index.php?Eventos_Id=$Eventos_Id'>$Evento</a> / ";
    //  echo $ListaEventosobj->DescripcionEvento;

    echo "Sala: $DescripcionSala / ";
    echo "Fecha: $Fecha / ";
    echo "Hora: $Hora / ";
    echo "Dirección: $Direccion";
    echo "</td></tr>";
  }?>
</table>
