<!DOCTYPE html>
<html lang="es">
  <head>
<?php include "include/inc_head.php";

	function borrarAdministrador($Administradores_Id)
	  {
		  global $SqlLink;
      $query = "SELECT Eventos_Id FROM Eventos WHERE Administradores_Id=$Administradores_Id;";
      $ResultObject=mysqli_query($SqlLink,$query);

      while ($obj = $ResultObject->fetch_object())
  		{
          $query = "DELETE FROM Entradas WHERE Eventos_Id=$obj->Eventos_Id";
          mysqli_query($SqlLink,$query);
      }
      $query = "DELETE FROM Eventos WHERE Administradores_Id=$Administradores_Id;";
      mysqli_query($SqlLink,$query);
      $query = "DELETE FROM Administradores WHERE Administradores_Id=$Administradores_Id;";
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
			include "include/inc_formularioAgregarAdministrador.php";
			break;
		case "modificarAdministrador":
			include "include/inc_formularioModificarAdministrador.php";
			break;
		case "borrarAdministrador":
			borrarAdministrador($_GET["Administradores_Id"]);
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
