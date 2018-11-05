<form method="post">
<?php
include_once "../../include/inc_connectdb.php";
$query = "SELECT * FROM Eventos;";
$resultObject=$SqlLink->query($query);?>
<label for="exampleInputPassword1">Evento para mirar entradas</label><br>
	<select required name="Eventos_Id">
    <?php
	while ($obj = $resultObject->fetch_object()){
		echo "<option value='".$obj->Eventos_Id."'>".$obj->Nombre."</option>";
	}
	?>
	</select>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
  </div>
