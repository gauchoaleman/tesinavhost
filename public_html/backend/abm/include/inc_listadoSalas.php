<br><form method="GET">Buscar:<input type="text" name="buscar"><input type="submit"></form><h1 align="right"><a href="/backend/abm/salas.php?accion=agregarSala">+</a></h4>
<?
//Hacer 2 queries: uno este, otro que joinea idtiporecurso, recurso y cliente y alquiler para mostrar los recursos que coinciden.
$query="SELECT * FROM Salas S ";
//echo $query;

if( isset($_GET["buscar"])){
	$buscar = $_GET["buscar"];
	$query .= "WHERE (S.Descripcion  LIKE '%$buscar%' OR S.Provincia LIKE '%$buscar%' OR S.Ciudad LIKE '%$buscar%' OR S.Calle LIKE '%$buscar%' OR S.Ciudad LIKE '%$buscar%');";
}
else if( isset($_GET["Salas_Id"]) &&  $_GET["accion"] != "borrarSala")
		$query .= " WHERE Salas_Id = ".$_GET["Salas_Id"].";";

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
    Descripción
	</h5>
    </div>
	<div class="col-sm-1" align="center">

    <h5>
    Capacidad
	</h5>

    </div>
	<div class="col-sm-1" align="center">
     <h5>
    Provincia
	</h5>

    </div>
	<div class="col-sm-1" align="center">
    <h5>
	CP
	</h5>
</div>
	<div class="col-sm-2" align="center">
      <h5>
    Ciudad
	</h5>
  </div>

    <div class="col-sm-2" align="center">
      <h5>
    Calle
	</h5>
  </div>
	<div class="col-sm-1" align="center">
		<h5>
	Altura Calle
</h5>
</div>
<div class="col-sm-1" align="center">
	<h5>
Contacto
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

    <?php echo $obj->Salas_Id; ?>


    </div>
	<div class="col-sm-1" align="center">

    <?php echo $obj->Descripcion; ?>


    </div>
    <div class="col-sm-1" align="center">

    <?php echo $obj->Capacidad; ?>
    </div>
	<div class="col-sm-1" align="center">

    <?php echo $obj->Provincia; ?>

    </div>
	<div class="col-sm-1" align="center">

    <?php echo $obj->CP; ?>

    </div>
	<div class="col-sm-2" align="center">

    <?php echo $obj->Ciudad; ?>

    </div>
    <div class="col-sm-2" align="center">
      <?php echo $obj->Calle; ?>
  </div>
	<div class="col-sm-1" align="center">
		<?php echo $obj->AlturaCalle; ?>
</div>
<div class="col-sm-1" align="center">
	<a href="contactos.php?accion=listadoContactos&Contactos_Id=<?php echo $obj->Contactos_Id; ?>">Ver</a>
</div>
<div class="col-sm-1" align="center">

<a onclick="return confirm('Seguro que quiere borrar la sala?')" href="salas.php?accion=borrarSala&Salas_Id=<?echo $obj->Salas_Id;?>"><img src="../img/borrar.png"></a>
<a href="salas.php?accion=modificarSala&Salas_Id=<?echo $obj->Salas_Id;?>"><img src="../img/modificar.png"></a>


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
