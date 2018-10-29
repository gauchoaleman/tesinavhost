	 <!-- Formulario -->
	 <div>
	 Los campos marcados con * son obligatorios

      <form name="form" method="POST" data-toggle="validator" action="include/inc_Administrador.php">
	   <div class="row">
    <div class="col-sm-3">
      <div class="form-group">
    <label for="exampleInputPassword1">Nombre (*)</label>
    <input type="text" name="Nombre" required  class="form-control">
  </div>
    </div>
    <div class="col-sm-3">
     <div class="form-group">
    <label for="exampleInputPassword1">Apellido (*)</label>
    <input type="text" name="Apellido" required class="form-control">
  </div>
    </div>
    <div class="col-sm-3">
      <div class="form-group">
    <label for="exampleInputPassword1">Email (*)</label>
    <input name="Email" required type="email" class="form-control">
  </div>
    </div>
		<div class="col-sm-3">
			<div class="form-group">
		<label for="exampleInputPassword1">Teléfono (*)</label>
		<input type="text" name="Telefono" required class="form-control" >
		</div>
	</div>
</div>
	<div class="row">
	<div class="col-sm-4">
		<div class="form-group">
	<label for="exampleInputPassword1">Clave (*)</label>
	<input type="password" name="Clave1" required class="form-control" >
	</div>
</div>
	<div class="col-sm-4">
		<div class="form-group">
	<label for="exampleInputPassword1">Reingrese clave (*)</label>
	<input type="password" name="Clave2" required class="form-control" >
	</div>
</div>
</div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
</div>
</div>
