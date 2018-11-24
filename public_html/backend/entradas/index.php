<!DOCTYPE html>
<html lang="es">
  <head>
    <?php include "include/inc_head.php"; ?>
  </head>

  <body>

    <div class="container">
<?php include "include/inc_menu.php";

if( isset($_GET["mensaje"]) ) echo $_GET["mensaje"];
if( isset($_GET["accion"]) )
	if($_GET["accion"] == "logout")	{
		session_destroy();
		header("Location: http://".$_SERVER['HTTP_HOST']."/backend/entradas/loginForm.php");
	}
	else if($_GET["accion"] == "cambiarclave")	{
		header("Location: http://".$_SERVER['HTTP_HOST']."/backend/entradas/cambiarClave.php");
	}
include "include/inc_listadoEntradas.php";
	//include "include/inc_resumenDeCuentas.php";
	?><!-- Site footer -->
      <footer class="footer">
        <p></p>
      </footer>

    </div> <!-- /container -->

  </body>
</html>
