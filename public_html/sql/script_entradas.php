<?php
/* Para generar script sql que ingrese entradas libres, no está perfecto,
hay que agregar algunas cosas */
$query = "INSERT INTO Entradas (Entradas_id,Eventos_id,Estado) VALUES";

for($ent=1;$ent<=200;$ent++){
  $query .= "($ent,1,'Libre'), \r\n";
}

for(;$ent<=350;$ent++){
  $query .= "($ent,2,'Libre'), \r\n";
}
echo $query;
echo "end";
?>
