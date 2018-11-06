<?php
/*if( !isset($_GET["Eventos_Id"])){
	include_once("inc_selectorEventos.php");

}*/
?>


<?if( isset($_GET["Eventos_Id"])){
		extract($_GET);
		echo "<br><a href='imprimirEntradas.php?Eventos_Id=$Eventos_Id' target='_blank'>Imprimir entradas</a>";
}
	?>

<br>
<?php
//Hacer 2 queries: uno este, otro que joinea idtiporecurso, recurso y cliente y alquiler para mostrar los recursos que coinciden.
$query="SELECT * FROM Entradas E ";
//echo $query;

if( isset($_GET["Eventos_Id"]) )
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
    <div class="col-sm-2" align="center">

  <h5>Estado

	</h5>
    </div>
	<div class="col-sm-1" align="center">

    <h5>
    Evento
	</h5>

    </div>

</div>


	<?
		while ($obj = $ResultObject->fetch_object())
		{
    ?>

	   <div class="row">

	<div class="col-sm-1" align="center">

    <?php echo $obj->Entradas_Id; ?>


    </div>
	<div class="col-sm-2" align="center">
<form name="form" method="POST" data-toggle="validator" action="include/inc_modificar_estado_entrada.php">
<select name="Estado">
    <option value='Libre' <?php if($obj->Estado == "Libre") echo "Selected";?>> Libre</option>
		<option value='Impresa' <?php if($obj->Estado == "Impresa") echo "Selected";?>> Impresa</option>
		<option value='Vendida' <?php if($obj->Estado == "Vendida") echo "Selected";?>> Vendida</option>
		<option value='Devuelta' <?php if($obj->Estado == "Devuelta") echo "Selected";?>> Devuelta</option>
</select>
<button type="submit" class="btn btn-primary">Enviar</button>
<input type="hidden" name="Entradas_Id" value="<?php echo $obj->Entradas_Id;?>">
</form>
    </div>
		<div class="col-sm-1" align="center">
			<a href="/backend/abm/eventos.php?accion=listadoEventos&Eventos_Id=<?php echo $obj->Eventos_Id; ?>">Ver</a>
		</div>
</div>
	<? }
	}
	 /* liberar el conjunto de resultados */
   	$ResultObject->close();
?>
