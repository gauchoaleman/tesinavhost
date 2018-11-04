<!DOCTYPE html>
<html lang="es">
<?php include "include/inc_head.php";?>

  <body>

    <div class="container">

<?php include "include/inc_menu.php";

	  if( isset($_GET["mensaje"]) ) echo $_GET["mensaje"];

	  if( isset($_GET["accion"]))
	  {
	  switch( $_GET["accion"]){
		case "agregarEvento":
			include "include/inc_formularioAgregarEvento.php";
			break;
		case "borrarEvento":
			borrarEvento($_GET["Eventos_Id"]);
			include "include/inc_listadoEventos.php";
			break;
		case "modificarEvento":
			if( $_POST ){
				include "include/inc_listadoEventos.php";
			}
			else
				include "include/inc_formularioModificarEvento.php";
			break;
		case "listadoEventos":
		default:
			include "include/inc_listadoEventos.php";
			break;
	  }
	  }
	  else
	  {
		  include "include/inc_listadoEventos.php";
	  }
?>
      <!-- Site footer -->
      <footer class="footer">
        <p></p>
      </footer>

    </div> <!-- /container -->


  </body>
</html>
<?php
function borrarEvento($Eventos_Id){
	 global $SqlLink;
	 $query = "DELETE FROM Eventos WHERE Eventos_Id=$Eventos_Id;";
	 mysqli_query($SqlLink,$query);
}?>
