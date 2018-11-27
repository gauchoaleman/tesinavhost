<?php
$ListaEventosquery = "SELECT s.Calle as SalaCalle,s.AlturaCalle as SalaAlturaCalle,e.Fecha as FechaEvento,e.Hora as HoraEvento,e.Nombre as NombreEvento,e.Descripcion as DescripcionEvento,s.Descripcion as DescripcionSala FROM Eventos e,Salas s WHERE s.Salas_Id=e.Salas_Id";
$Ro = $SqlLink->query($ListaEventosquery);
  //echo $ListaEventosquery;
?>


<table border=1>
  <?php while($ListaEventosobj = $Ro->fetch_object()){
    $Evento = $ListaEventosobj->NombreEvento;
    $DescripcionSala = $ListaEventosobj->DescripcionSala;
    $Fecha = date("j/m/Y",strtotime($ListaEventosobj->FechaEvento));
    $Hora=date("H:i",strtotime($ListaEventosobj->HoraEvento));
    $Direccion = $ListaEventosobj->SalaCalle." ".$ListaEventosobj->SalaAlturaCalle;
    echo "<tr><td width='600'>";
    echo "$Evento / ";
    //  echo $ListaEventosobj->DescripcionEvento;

    echo "Sala: $DescripcionSala / ";
    echo "Fecha: $Fecha / ";
    echo "Hora: $Hora / ";
    echo "Dirección: $Direccion";
    echo "</td></tr>";
  }?>
</table>
