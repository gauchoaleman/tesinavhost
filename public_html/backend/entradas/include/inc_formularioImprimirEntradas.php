<form name="form" method="POST"  data-toggle="validator">
<div class="row">
  <div class="col-sm-4">
   <div class="form-group">
  <label for="exampleInputPassword1">¿Cuántas entradas desea imprimir?</label>
  <input type="text" name="ctdEntradas" required class="form-control" value="">
</div>
</div>
</div>
<div class="row">
  <div class="col-sm-4">
   <div class="form-group">
  <button type="submit" class="btn btn-primary" >Enviar</button>
</div>
</div>
  <input type="hidden" name="Eventos_Id" class="form-control" value="<? echo $_GET['Eventos_Id'];?>">
</form>
</div>
<a href="/backend/">Volver al ABM</a>
</div>
