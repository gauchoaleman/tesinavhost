<?php
$query = "SELECT * FROM Eventos WHERE Eventos_Id=".$_GET['Eventos_Id'];
$resultObjectDatosCliente=$SqlLink->query($query);
$datosObj = $resultObjectDatosCliente->fetch_object();
?>
	 <!-- Formulario -->
	 <div>
	 LOs campos marcados con * son obligatorios<br>

	 	 <form enctype="multipart/form-data" method="POST" name="form" action="include/inc_modificar_evento.php">
		 <input type="hidden" name="MAX_FILE_SIZE" value="300000" />
	 	<div class="row">
	  <div class="col-sm-3">
	 	 <div class="form-group">
	  <label for="exampleInputPassword1">Nombre *</label>
	  <input type="text" name="Nombre" value="<? echo $datosObj->Nombre;?>" required  class="form-control">
	 </div>
	  </div>
	  <div class="col-sm-5">
	 	<div class="form-group">
	  <label for="exampleInputPassword1">Descripcion *</label>
	  <textarea required name="Descripcion" class="form-control"><?php echo $datosObj->Descripcion; ?></textarea>
	 </div>
	  </div>
	  <div class="col-sm-1">
	 	 <div class="form-group">
	  <label for="exampleInputPassword1">Costo *</label>
	  <input name="Costo" required type="text" value="<? echo $datosObj->Costo;?>" class="form-control">
	 </div>
 </div></div>
		 <div class="row">
	  <div class="col-sm-3">
	 	 <div class="form-group">
	  <label for="exampleInputPassword1">Fecha/Hora *	</label>
		<div>

        <input type="datetime-local" name="FechaHora" value="<? echo $datosObj->Fecha."T".$datosObj->Hora; ?>"
               min="<?php echo date('Y-m-d',time())."T00:00";?>" max="<? echo twoyears()."-01-01T00:00" ?> class="form-control" />
    </div>

	  </div>
	 </div>

<div class="col-sm-2">
<div class="form-group">
<? include "include/inc_selectorSalas.php";?>
</div></div>
<div class="col-sm-2">
<div class="form-group">
<? include "include/inc_selectorAdministradores.php";?>
</div></div></div>

<div class="row">
<div class="col-sm-3">
 <div class="form-group">
	 <label for="exampleInputPassword1">Facebook</label>
<input name="LinkFacebook" type="text"  value="<?php echo $datosObj->LinkFacebook; ?>" class="form-control">
</div></div>

<div class="col-sm-3">
 <div class="form-group">
	 <label for="exampleInputPassword1">Twitter</label>
<input name="LinkTwitter" type="text" value="<?php echo $datosObj->LinkTwitter; ?>" class="form-control">
</div></div>

<div class="col-sm-3">
 <div class="form-group">
	 <label for="exampleInputPassword1">Instagram</label>
<input name="LinkInstagram" type="text" value="<?php echo $datosObj->LinkInstagram; ?>" class="form-control">
</div></div>

<div class="col-sm-3">
 <div class="form-group">
	 <label for="exampleInputPassword1">Imagen</label>
	 <input type="file" name="Imagen">
</div></div>

 <div class="row">
 <div class="col-sm-2">
	<div class="form-group">
 <button type="submit" class="btn btn-primary">Enviar</button>
</div></div>
</div>
	 <!-- <div class="col-sm-4">
	  <div class="form-group">
	 <label for="exampleInputPassword1">Reingrese clave (*)</label>
	 <input type="password" name="Clave2" required class="form-control" >
	 </div>-->
	 </div>
	 </div>
	 <input type="hidden" name="Eventos_Id" value="<? echo $datosObj->Eventos_Id;?>">

	 </form>
	 </div>
	 </div>
