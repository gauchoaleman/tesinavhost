<?php
//include_once "../../../include/inc_connectdb.php";
$query = "SELECT * FROM Salas;";
$resultObject=$SqlLink->query($query);?>
<label for="exampleInputPassword1">Sala</label><br>
	<select required name="Salas_Id">
    <?php
	while ($obj = $resultObject->fetch_object()){
		echo "<option ";
		if (isset ($datosObj) && $datosObj->Salas_Id==$obj->Salas_Id)
			echo " selected ";
		echo "value='".$obj->Salas_Id."'>".$obj->Descripcion."</option>";
	}
	?>
	</select>
