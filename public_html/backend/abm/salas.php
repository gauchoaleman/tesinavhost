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
		case "agregarSala":
			include "include/inc_formularioAgregarSala.php";
			break;
		case "borrarSala":
			borrarSala($_GET["idAlquiler"]);
			include "include/inc_listadoSalas.php";
			break;
		case "modificarSala":
			if( $_POST ){
				include "include/inc_listadoSalas.php";
			}
			else
				include "include/inc_formularioModificarSala.php";
			break;
		case "listadoSalas":
		default:
			include "include/inc_listadoSalas.php";
			break;
	  }
	  }
	  else
	  {
		  include "include/inc_listadoSalas.php";
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
function borrarSala($Salas_Id){
	 global $SqlLink;
	 $query = "DELETE FROM Salas WHERE Salas_Id=$Salas_Id;";
	 mysqli_query($SqlLink,$query);
}?>
