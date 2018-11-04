<br><form method="GET">Buscar:<input type="text" name="buscar"><input type="submit"></form><h1 align="right"><a href="/backend/abm/administradores.php?accion=agregarAdministrador">+</a></h5>
<?
$query = "SELECT * FROM Administradores ";
if( isset($_GET["buscar"]) && $buscar=$_GET["buscar"])
	$query .= " WHERE (nombre LIKE '%$buscar%' OR apellido LIKE '%$buscar%' OR email LIKE '%$buscar%');";
else if( isset($_GET["Administradores_Id"]) &&  $_GET["accion"] != "borrarAdministrador")
			$query .= " WHERE Administradores_Id = ".$_GET["Administradores_Id"].";";
	$ResultObject = mysqli_query($SqlLink,$query);
	//echo $query;
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

    <?php echo $obj->Administradores_Id; ?>


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

<a onclick="return confirm('Seguro que quiere borrar el administrador?')" href="administradores.php?accion=borrarAdministrador&Administradores_Id=<?echo $obj->Administradores_Id;?>">B</a>
<a href="administradores.php?accion=modificarAdministrador&Administradores_Id=<?echo $obj->Administradores_Id;?>">M</a>


</div>
</div>
	<? }
	}
	 /* liberar el conjunto de resultados */
   	$ResultObject->close();?>
