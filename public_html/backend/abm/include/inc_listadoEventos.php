<br><form method="GET">Buscar:<input type="text" name="buscar"><input type="submit"></form><h1 align="right"><a href="/backend/abm/eventos.php?accion=agregarEvento">+</a></h4>
<?
//Hacer 2 queries: uno este, otro que joinea idtiporecurso, recurso y cliente y alquiler para mostrar los recursos que coinciden.
$query="SELECT * FROM Eventos E ";
//echo $query;

if( isset($_GET["buscar"])){
	$buscar = $_GET["buscar"];
	$query .= "WHERE (E.Nombre LIKE '%$buscar%' OR E.Descripcion  LIKE '%$buscar%' );";
}
else if( isset($_GET["Eventos_Id"]) &&  $_GET["accion"] != "borrarEvento")
		$query .= " WHERE Eventos_Id = ".$_GET["Eventos_Id"].";";
$ResultObject = mysqli_query($SqlLink,$query);

$ResultArray = array();
	if (!$ResultObject)
		trigger_error("SQL Query failed: ".mysqli_error($SqlLink),E_USER_ERROR);
	else if($ResultObject->num_rows >0)
	{
?>

<div class="row">

    <div class="col-sm-1" align="center" >
<h5>
    Id
</h5>
    </div>
    <div class="col-sm-1" align="center">

  <h5>
    Nombre
	</h5>
    </div>
	<div class="col-sm-3" align="center">

    <h5>
    Descripcion
	</h5>

    </div>
	<div class="col-sm-1" align="center">
     <h5>
    Costo
	</h5>

    </div>
	<div class="col-sm-1" align="center">
    <h5>
	Fecha
	</h5>
</div>
	<div class="col-sm-1" align="center">
    <h5>
	Hora
	</h5>
</div>
	<div class="col-sm-1" align="center">
      <h5>
    Administrador
	</h5>
  </div>

    <div class="col-sm-1" align="center">
      <h5>
    Sala
	</h5>
  </div>
	<div class="col-sm-1" align="center">
		<h5>
	Entradas
</h5>
</div>

<div class="col-sm-1" align="center" >

&nbsp;

</div>
</div>


	<?
		while ($obj = $ResultObject->fetch_object())
		{
    ?>

	   <div class="row">

	<div class="col-sm-1" align="center">

    <?php echo $obj->Eventos_Id; ?>


    </div>
	<div class="col-sm-1" align="center">

    <?php echo $obj->Nombre; ?>


    </div>
    <div class="col-sm-3" align="center">

    <?php echo $obj->Descripcion; ?>
    </div>
	<div class="col-sm-1" align="center">

    <?php echo $obj->Costo; ?>

    </div>
	<div class="col-sm-1" align="center">

    <?php
		$fecha = date_create($obj->Fecha);
		echo date_format($fecha, 'd/m/Y');
		?>

    </div>
	<div class="col-sm-1" align="center">

    <?php //echo $obj->Hora; ?>
		<?php
		$hora = date_create($obj->Hora);
		echo date_format($hora, 'H:i');
		?>
    </div>
		<div class="col-sm-1" align="center">
			<a href="administradores.php?accion=listadoAdministradores&Administradores_Id=<?php echo $obj->Administradores_Id; ?>">Ver</a>
		</div>
		<div class="col-sm-1" align="center">
			<a href="salas.php?accion=listadoSalas&Salas_Id=<?php echo $obj->Salas_Id; ?>">Ver</a>
		</div>

		<div class="col-sm-1" align="center">
			<a href="/backend/entradas/entradas.php?accion=listadoEntradas&Eventos_Id=<?php echo $obj->Eventos_Id; ?>">Ver</a>
		</div>

<div class="col-sm-1" align="center">

<a onclick="return confirm('Seguro que quiere borrar el evento?')" href="eventos.php?accion=borrarEvento&Eventos_Id=<?echo $obj->Eventos_Id;?>"><img src="../img/borrar.png"></a>
<a href="eventos.php?accion=modificarEvento&Eventos_Id=<?echo $obj->Eventos_Id;?>"><img src="../img/modificar.png"></a>


</div>



  </div>
	<? }
	}
	 /* liberar el conjunto de resultados */
   	$ResultObject->close();


	function mostrarRecursos($idAlquiler)
	{
		$ret="";
		global $SqlLink;
		$query="SELECT descripcion FROM recurso r,recursoalquiler ra WHERE ra.idAlquiler=$idAlquiler AND r.idRecurso=ra.idRecurso;";
		$ResultObject = mysqli_query($SqlLink,$query);
		//echo $query;
		while ($obj = $ResultObject->fetch_object()){
			$ret .= $obj->descripcion."<br>";
		}
		$ret .= "<hr>";
		echo $ret;
	}
?>
