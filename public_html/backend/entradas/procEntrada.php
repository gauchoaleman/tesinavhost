<!DOCTYPE html>
<html lang="es">
<?php include "include/inc_head.php";
extract($_GET);

function cambiarEstadoEntrada($Entradas_Id,$NuevoEstado){
  global $SqlLink;
  $query = "UPDATE Entradas SET Estado='$NuevoEstado' WHERE Entradas_Id=$Entradas_Id";

  $SqlLink->query($query);
}

function estadoEntrada($Entradas_Id){
  global $SqlLink;
  $query = "SELECT Estado FROM Entradas WHERE Entradas_Id=$Entradas_Id";
  $sqlObj = $SqlLink->query($query);
  //echo $query;
  $obj = $sqlObj->fetch_object();
  return $obj->Estado;
}

function NombreCompradorEntrada($Entradas_Id){
  global $SqlLink;
  $query = "SELECT NombreComprador FROM Entradas WHERE Entradas_Id=$Entradas_Id";
  $sqlObj = $SqlLink->query($query);

  $obj = $sqlObj->fetch_object();
  return $obj->NombreComprador;
}

function cambiarNombreCompradorEntrada($Entradas_Id,$NombreComprador){
  global $SqlLink;
  $query = "UPDATE Entradas SET NombreComprador='$NombreComprador' WHERE Entradas_Id=$Entradas_Id";
  $SqlLink->query($query);
}
?>

  <body>

    <div class="container"><?php
        switch(estadoEntrada($Entradas_Id)){
        case "Libre":
          echo "La entrada no está impresa.";
          break;
        case "Impresa":
        case "Devuelta":
          if( !isset($_POST["nuevoNombre"]))
            include "include/inc_formularioPonerNombre.php";
          else{
            cambiarEstadoEntrada($Entradas_Id,"Vendida");
            cambiarNombreCompradorEntrada($Entradas_Id,$_POST["nuevoNombre"]);
            echo "El ticket se vendió satisfactoriamente";
          }
            break;
        case "Vendida":
        if( isset($_POST["NombreOk"])){
          cambiarEstadoEntrada($Entradas_Id,"Ingresado");
          echo "Espectador puede ingresar al recinto";
        }
        elseif(isset($_POST["NombreMal"] )){
          cambiarEstadoEntrada($Entradas_Id,"Invalida");
          echo "Entrada no valida";
        }
        else{
          include "include/inc_formularioConfirmarNombre.php";
        }
          break;
        case "Invalida":
          echo "La entrada es invalida";
        default:
          break;
        }
?>    </div> <!-- /container -->


  </body>
</html>
