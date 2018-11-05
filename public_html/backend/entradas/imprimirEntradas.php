<!DOCTYPE html>
<html lang="es">
<?php include "include/inc_head.php";?>

  <body>

    <div class="container">
<?
if( !$_POST ){
    include("include/inc_formularioImprimirEntradas.php");
}
else{
  extract($_POST);
  extract($_GET);
  $query = "SELECT * FROM Entradas WHERE Estado='Libre' AND Eventos_Id=$Eventos_Id LIMIT $ctdEntradas;";
  //echo $query;
  $ResultObject = $SqlLink->query($query);
  while($obj = $ResultObject->fetch_object()){
    $Updatequery = "UPDATE Entradas SET Estado='Impresa' WHERE Entradas_Id=".$obj->Entradas_Id.";";

    $SqlLink->query($Updatequery);

    include("imprimirEntrada.php");

  }
}
?>
<footer class="footer">
  <p></p>
</footer>

</div> <!-- /container -->


</body>
</html>
