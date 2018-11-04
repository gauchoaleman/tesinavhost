<?php
//include_once "../../../include/inc_connectdb.php";
$query = "SELECT * FROM Administradores;";
$resultObject=$SqlLink->query($query);?>
<label for="exampleInputPassword1">Administrador</label><br>
	<select required name="Administradores_Id">
    <?php
	while ($obj = $resultObject->fetch_object()){
		echo "<option ";
		if (isset ($datosObj) && $datosObj->Administradores_Id==$obj->Administradores_Id)
			echo " selected ";
		echo "value='".$obj->Administradores_Id."'>".$obj->Nombre." ".$obj->Apellido."</option>";
	}
	?>
	</select>
