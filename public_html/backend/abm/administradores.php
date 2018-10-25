<!DOCTYPE html>
<html lang="es">
  <head>
    <?php include "include/inc_head.php";
	function borrarAdministrador($Administradores_id)
	  {
		  global $SqlLink;
		  $query = "DELETE FROM Administradores WHERE Administradores_id=$Administradores_id;";
		  mysqli_query($SqlLink,$query);
	  }?>
  </head>

  <body>

    <div class="container">

      <?php include "include/inc_menu.php";
	  if( isset($_GET["mensaje"]) ) echo $_GET["mensaje"];

	  if( isset($_GET["accion"]))
	  {
	  switch( $_GET["accion"]){
		case "agregarAdministrador":
			include "include/inc_formularioAdministrador.php";
			break;
		case "modificarAdministrador":
			include "include/inc_formularioModificarAdministrador.php";
			break;
		case "borrarCliente":
			borrarCliente($_GET["Administradores_id"]);
			include "include/inc_listadoAdministradores.php";
			break;
		case "listadoClientes":
		default:
			include "include/inc_listadoAdministradores.php";
			break;
	  }
	  }
	  else
	  {
		  include "include/inc_listadoAdministradores.php";
	  }


	  ?>
      <!-- Site footer -->
      <footer class="footer">
        <p></p>
      </footer>

    </div> <!-- /container -->



  </body>
</html>
