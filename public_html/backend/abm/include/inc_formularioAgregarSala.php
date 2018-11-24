	 <!-- Formulario -->


	 <div>
	 Todos los campos son obligatorios

      <form name="form" method="POST" data-toggle="validator" action="include/inc_Sala.php">
	   <div class="row">
    <div class="col-sm-2">
      <div class="form-group">
    <label for="exampleInputPassword1">Descripción </label>
    <input type="text" name="Descripcion" required  class="form-control">
  </div>
    </div>
    <div class="col-sm-2">
     <div class="form-group">
    <label for="exampleInputPassword1">Capacidad </label>
    <input type="text" name="Capacidad" required class="form-control">
  </div>
    </div>
    <div class="col-sm-3">
      <div class="form-group">
    <label for="exampleInputPassword1">Provincia </label>
    <input name="Provincia" required type="text" class="form-control">
  </div>
    </div>
		<div class="col-sm-1">
			<div class="form-group">
		<label for="exampleInputPassword1">CP </label>
		<input type="text" name="CP" required class="form-control" >
		</div>
	</div>
</div>
	<div class="row">
	<div class="col-sm-3">
		<div class="form-group">
	<label for="exampleInputPassword1">Ciudad </label>
	<input type="text" name="Ciudad" required class="form-control" >
	</div>
	</div>
	<div class="col-sm-3">
	<div class="form-group">
<label for="exampleInputPassword1">Calle </label>
<input type="text" name="Calle" required class="form-control" >
</div>
</div>
<div class="col-sm-3">
<div class="form-group">
<label for="exampleInputPassword1">Altura calle </label>
<input type="text" name="AlturaCalle" required class="form-control" >
</div>
</div>
<div class="col-sm-3">
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
<div class="row">
<div class="col-sm-3">
	<div class="form-group">
  <button type="submit" class="btn btn-primary">Enviar</button>
</div>


</div>

</form>
</div>
</div>
