<?php

$query = "SELECT * FROM Contactos WHERE Contactos_Id=".$_GET['Contactos_Id'];

$resultObjectDatosCliente=$SqlLink->query($query);
$datosObj = $resultObjectDatosCliente->fetch_object();
?>
	 <!-- Formulario -->
	 <div>
	 Los campos marcados con * son obligatorios

	 	 <form name="form" method="POST" data-toggle="validator" action="include/inc_Contacto.php">
	 	<div class="row">
	  <div class="col-sm-3">
	 	 <div class="form-group">
	  <label for="exampleInputPassword1">Descripción (*)</label>
	  <input type="text" name="Descripcion" value="<? echo $datosObj->Descripcion;?>" required  class="form-control">
	 </div>
	  </div>
	  <div class="col-sm-3">
	 	<div class="form-group">
	  <label for="exampleInputPassword1">Capacidad (*)</label>
	  <input type="text" name="Capacidad" value="<? echo $datosObj->Capacidad;?>" required class="form-control">
	 </div>
	  </div>
	  <div class="col-sm-3">
	 	 <div class="form-group">
	  <label for="exampleInputPassword1">Provincia (*)</label>
	  <input name="Provincia" required type="text" value="<? echo $datosObj->Provincia;?>" class="form-control">
	 </div>
	  </div>
	  <div class="col-sm-3">
	 	 <div class="form-group">
	  <label for="exampleInputPassword1">CP (*)</label>
	  <input type="text" name="CP" required value="<? echo $datosObj->CP;?>" class="form-control" >
	  </div>
	 </div>
	 </div>
	 <div class="row">
	 <div class="col-sm-4">
	  <div class="form-group">
	 <label for="exampleInputPassword1">Ciudad (*)</label>
	 <input type="text" name="Ciudad" required value="<? echo $datosObj->Ciudad;?>" class="form-control" >
	 </div>
	 <div class="form-group">
	 <label for="exampleInputPassword1">Calle (*)</label>
	 <input type="text" name="Calle" required class="form-control" value="<? echo $datosObj->Calle;?>">
	 </div>
	 <div class="form-group">
	 <label for="exampleInputPassword1">Altura calle (*)</label>
	 <input type="text" name="AlturaCalle" required value="<? echo $datosObj->AlturaCalle;?>" class="form-control" >
	 </div>
	 <div class="form-group">
	 <? include "include/inc_selectorContactos.php";?>
	 </div>
	 </div>
	 <!-- <div class="col-sm-4">
	  <div class="form-group">
	 <label for="exampleInputPassword1">Reingrese clave (*)</label>
	 <input type="password" name="Clave2" required class="form-control" >
	 </div>-->
	 </div>
	 </div>
	 <button type="submit" class="btn btn-primary">Enviar</button>
	 </form>
	 </div>
	 </div>
