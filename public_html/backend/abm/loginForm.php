<?php
require_once "../../include/inc_connectdb.php";

if( isset($_POST["enviar"])){

	if (tryLogin($_POST)){

		//echo "Location: http://".$_SERVER['HTTP_HOST']."/backend/abm/index.php";
		header("Location: http://".$_SERVER['HTTP_HOST']."/backend/abm/index.php");
	}
	else $mensaje="Login no exitoso.";
}

?>
<html>
<head>    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script type="/text/javascript" src="js/jquery-3.1.1.js" charset="UTF-8"></script></head>
	    <!-- Para el Menú - Custom styles for this template -->
    <link href="css/justified-nav.css" rel="stylesheet"></head>
<body>

<div class="container">
<h3 class="text-muted">ABM SEA - Login</h3>
<? if( isset($mensaje))
	echo $mensaje;?>
<div class="row" >
    <div class="col-sm-3" >
<form method="POST" data-toggle="validator">
<label required for="exampleInputPassword1">Nombre de usuario</label>
    <input type="text" name="nombre" class="form-control" value="">
	</div>
	<div class="col-sm-3">

<label for="exampleInputPassword1">Clave</label>
    <input type="password" required name="clave" class="form-control" value="">
	</div>
	</div>
<button type="submit" class="btn btn-primary" name="enviar" value="login">Enviar</button>
</div>
</form>
</body>
</html>
<?php
function tryLogin($Data){
	global $SqlLink;

	extract($Data);
	//print_r($Data);
	$query = "SELECT Administradores_Id FROM Administradores WHERE Nombre='$nombre' AND Clave='$clave';";

	$resultObject = mysqli_query($SqlLink,$query);
	$obj = $resultObject->fetch_object();
	if( $resultObject->num_rows >0){
		session_start();
		$_SESSION["loginId"] = $obj->Administradores_Id;
		return true;
	}
	else
		return false;
}?>
