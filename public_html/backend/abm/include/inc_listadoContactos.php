<br><form method="GET">Buscar:<input type="text" name="buscar"><input type="submit"></form><h1 align="right"><a href="/backend/abm/contactos.php?accion=agregarContacto">+</a></h5>
<?
$query = "SELECT * FROM Contactos ";
if( isset($_GET["buscar"]) && $buscar=$_GET["buscar"])
	$query .= " WHERE (nombre LIKE '%$buscar%' OR apellido LIKE '%$buscar%' OR email LIKE '%$buscar%') ";
else if( isset($_GET["Contactos_Id"]) &&  $_GET["accion"] != "borrarContacto") 
		$query .= " WHERE Contactos_Id = ".$_GET["Contactos_Id"].";";
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

    <h5>
    Nombre
	</h5>
    </div>
	<div class="col-sm-2" align="center">

    <h5>
    Apellido
	</h5>

    </div>
	<div class="col-sm-2" align="center">

    <h5>
    Email
	</h5>

    </div>
	<div class="col-sm-2" align="center">
    <h5>
    Telefono
	</h5>
	</div>
	<div class="col-sm-1" align="center">
		<h5>
		&nbsp;
	</h5>

		</div>
	</div>
	<?
		while ($obj = $ResultObject->fetch_object())
		{
    ?>

	   <div class="row">

	<div class="col-sm-1" align="center">

    <?php echo $obj->Contactos_Id; ?>


    </div>
    <div class="col-sm-2" align="center">

    <?php echo $obj->Nombre; ?>
    </div>
	<div class="col-sm-2" align="center">

    <?php echo $obj->Apellido; ?>

    </div>
	<div class="col-sm-2" align="center">

    <?php echo $obj->Email; ?>

    </div>
	<div class="col-sm-2" align="center">

    <?php echo $obj->Telefono; ?>
</div>
<div class="col-sm-1" align="center">

<a onclick="return confirm('Seguro que quiere borrar el contacto?')" href="contactos.php?accion=borrarContacto&Contactos_Id=<?echo $obj->Contactos_Id;?>">B</a>
<a href="contactos.php?accion=modificarContacto&Contactos_Id=<?echo $obj->Contactos_Id;?>">M</a>


</div>
</div>
	<? }
	}
	 /* liberar el conjunto de resultados */
   	$ResultObject->close();?>
