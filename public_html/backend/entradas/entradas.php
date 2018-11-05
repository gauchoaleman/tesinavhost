<!DOCTYPE html>
<html lang="es">
<?php

include "include/inc_head.php";

?>

  <body>

    <div class="container">

<?php include "include/inc_menu.php";

	  if( isset($_GET["mensaje"]) ) echo $_GET["mensaje"];

	  if( isset($_GET["accion"])){
	  switch( $_GET["accion"]){

		case "listadoEntradas":
		default:
			include "include/inc_listadoEntradas.php";
			break;
	  }
	  }
	  else
	  {
		  include "include/inc_listadoEntradas.php";
	  }
?>
      <!-- Site footer -->
      <footer class="footer">
        <p></p>
      </footer>

    </div> <!-- /container -->


  </body>
</html>
