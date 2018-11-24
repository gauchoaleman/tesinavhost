	 <!-- Formulario -->
	 <div>
	 Todos los campos son obligatorios<br>

	 	 <form name="form" method="POST" data-toggle="validator" action="include/inc_Evento.php">
	 	<div class="row">
	  <div class="col-sm-3">
	 	 <div class="form-group">
	  <label for="exampleInputPassword1">Nombre </label>
	  <input type="text" name="Nombre" required  class="form-control">
	 </div>
	  </div>
	  <div class="col-sm-5">
	 	<div class="form-group">
	  <label for="exampleInputPassword1">Descripcion </label>
	  <textarea required name="Descripcion" class="form-control"></textarea>
	 </div>
	  </div>
	  <div class="col-sm-1">
	 	 <div class="form-group">
	  <label for="exampleInputPassword1">Costo </label>
	  <input name="Costo" required type="text"  class="form-control">
	 </div>
 </div></div>
		 <div class="row">
	  <div class="col-sm-3">
	 	 <div class="form-group">
	  <label for="exampleInputPassword1">Fecha/Hora </label>
		<div>

        <input type="datetime-local" name="FechaHora" value="<? echo date('Y-m-d',time())."T00:00"; ?>"
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
 <div class="col-sm-2">
	<div class="form-group">
 <button type="submit" class="btn btn-primary">Enviar</button>
</div></div>
</div>

	 </form>
	 </div>
