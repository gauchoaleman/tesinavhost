<form name="form" method="POST"  data-toggle="validator">
<div class="row">
  <div class="col-sm-4">
   <div class="form-group">
  <label for="exampleInputPassword1">Confirmar nombre de comprador:<?php echo NombreCompradorEntrada($Entradas_Id);?></label>
</div>
</div>
</div>
<div class="row">
  <div class="col-sm-4">
   <div class="form-group">
  <button type="submit" class="btn btn-primary" name="NombreOk" value="1" >Nombres coinciden</button>
  <button type="submit" class="btn btn-primary" name="NombreMal" value="1">Nombres no coinciden</button>
</div>
</div>
</form>
</div>
</div>
