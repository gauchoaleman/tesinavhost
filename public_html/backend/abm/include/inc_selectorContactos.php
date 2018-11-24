<?php
//include_once "../../../include/inc_connectdb.php";
$query = "SELECT * FROM Contactos;";
$resultObject=$SqlLink->query($query);?>
<label for="exampleInputPassword1">Contacto</label><br>
	<select required name="Contactos_Id">
    <?php
	while ($obj = $resultObject->fetch_object()){
		echo "<option ";
		if (isset ($datosObj) && $datosObj->Contactos_Id==$obj->Contactos_Id)
			echo " selected ";
		echo "value='".$obj->Contactos_Id."'>".$obj->Nombre." ".$obj->Apellido."</option>";
	}
	?>
	</select>
  </div>
