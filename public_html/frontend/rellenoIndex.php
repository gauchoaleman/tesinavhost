<?php
require_once "../include/inc_connectdb.php";
if( isset($_GET['Eventos_Id']))
  include "include/inc_mostrarEvento.php";
else
  include "include/inc_listaEventos.php";
?>
