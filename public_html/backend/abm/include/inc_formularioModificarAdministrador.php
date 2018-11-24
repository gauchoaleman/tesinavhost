<?php

$query = "SELECT * FROM Administradores WHERE Administradores_Id=".$_GET['Administradores_Id'];

$resultObjectDatosCliente=$SqlLink->query($query);
$datosObj = $resultObjectDatosCliente->fetch_object();
?>
	 <!-- Formulario -->
	 <div>
	 Los campos marcados con * son obligatorios

      <form name="form" method="POST" data-toggle="validator" action="include/inc_modificar_administrador.php">
	   <div class="row">
    <div class="col-sm-3">
      <div class="form-group">
    <label for="exampleInputPassword1">Nombre (*)</label>
    <input type="text" name="Nombre" required value="<? echo $datosObj->Nombre;?>" class="form-control">
  </div>
    </div>
    <div class="col-sm-3">
     <div class="form-group">
    <label for="exampleInputPassword1">Apellido (*)</label>
    <input type="text" name="Apellido" required value="<? echo $datosObj->Apellido;?>" class="form-control">
  </div>
    </div>
    <div class="col-sm-3">
      <div class="form-group">
    <label for="exampleInputPassword1">Email (*)</label>
    <input name="Email" required type="email" value="<? echo $datosObj->Email;?>" class="form-control">
  </div>
    </div>
		<div class="col-sm-3">
			<div class="form-group">
		<label for="exampleInputPassword1">Teléfono (*)</label>
		<input type="text" name="Telefono" required value="<? echo $datosObj->Telefono;?>" class="form-control" >
		</div>
	</div>



  <input type="hidden" name="Administradores_Id" value="<? echo $datosObj->Administradores_Id;?>">
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
</div>
