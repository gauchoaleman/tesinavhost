<!DOCTYPE html>
<html lang="es">
  <head>
<?php include "include/inc_head.php";
    

	function borrarContacto($Contactos_Id){
        global $SqlLink;
        $query = "DELETE FROM Contactos WHERE Contactos_Id=$Contactos_Id;";
        
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
		case "agregarContacto":
			include "include/inc_formularioAgregarContacto.php";
			break;
		case "modificarContacto":
			include "include/inc_formularioModificarContacto.php";
			break;
		case "borrarContacto":
			borrarContacto($_GET["Contactos_Id"]);
			include "include/inc_listadoContactos.php";
			break;
		case "listadoContactos":
		default:
			include "include/inc_listadoContactos.php";
			break;
	    }
	  }
	  else
	  {
		  include "include/inc_listadoContactos.php";
	  }


	  ?>
      <!-- Site footer -->
      <footer class="footer">
        <p></p>
      </footer>

    </div> <!-- /container -->



  </body>
</html>
