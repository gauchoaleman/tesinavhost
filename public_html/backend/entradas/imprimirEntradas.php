<?php
require_once ("../../vendor/autoload.php");
use Spipu\Html2Pdf\Html2Pdf;
require_once "../../include/inc_connectdb.php";
//Si se ingresaron cantidad de entradas
if( isset($_POST["ctdEntradas"]) ){
  include_once ("include/inc_imprimirEntradasFunc.php");
  $content = "<page>";
  extract($_POST);
  extract($_GET);
  $query = "SELECT * FROM Entradas WHERE (Estado='Libre' OR Estado='Devuelta') AND Eventos_Id=$Eventos_Id LIMIT $ctdEntradas;";

  $ResultObject = $SqlLink->query($query);

  while($obj = $ResultObject->fetch_object()) {
    $Updatequery = "UPDATE Entradas SET Estado='Impresa' WHERE Entradas_Id=".$obj->Entradas_Id.";";
    $SqlLink->query($Updatequery);
    $content .= imprimirEntrada($obj->Entradas_Id);
    }
$content .= "</page>";
$html2pdf = new \Spipu\Html2Pdf\Html2Pdf;
$html2pdf->writeHTML($content);
$html2pdf->output('entradas.pdf','D');
//header("Location: http://".$_SERVER['HTTP_HOST']."/backend/abm/index.php?mensaje=Impresion de entradas exitosa");
}
else{?>
  <!DOCTYPE html>
  <html lang="es">
<?
  include "include/inc_head.php";
  //$EntradasXPagina=5;
  ?>
  <body>
    <div class="container">
  <?php
  include("include/inc_formularioImprimirEntradas.php");
?>
  <footer class="footer">
    <p></p>
  </footer>
  </div> <!-- /container -->
  </body>
  </html>
  <?
}  ?>
