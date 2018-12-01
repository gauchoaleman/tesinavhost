<!DOCTYPE html>
  <html lang="es" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Sea Produccion y cultural</title>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
  <div class="container">
      <div class="row">
        <div class="col-md-4">
          <img class="img-responsive" src="img\Sea.jpeg" height="109" width="150" alt="Responsive image">
        </div>
        <div class="col-md-4">
        </br>
        </div>
      </div>
  </div>

<div class="container">
  <header>
    <nav class="navbar navbar-default" style="background-color: #2fe3fc">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="#" class="navbar-brand"></a>
          <div class="collapse navbar-collapse" id=bs-example-navbar-collapse-1>
            <ul class="nav navbar-nav">
                <li><a href="">Inicio</a></li>
                <li><a href="">Historia</a></li>
                <li><a href="">Cronograma</a></li>
                <li><a href="">Contacto</a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </header>
</div>

<div class="row">
<div class="col-md-6 col-md-offset-5">
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Buscar evento" aria-label="Buscar evento">
    <button class="btn btn-outline-success my- my-sm-0" type="submit">Buscar</button>
  </form>
</div>
</div>
<br>

<div class="container">
    <div class="row">
      <?php include("./rellenoIndex.php"); ?>
    </div>
</div>


<footer class="page-footer center-on-small-only unique-color-dark pt-0">


    <div class="container mt-5 mb-4 text-center text-md-left">
        <div class="row mt-3">

            <!--First column-->
            <div class="col-md-3 col-lg-4 col-xl-3 mb-r">
                <h3 class="title font-bold"><strong>Sea Produccion y cultural</strong></h3>
                <p>Cultura online</p>
            </div>

            <div class="col-md-1 col-lg-4 col-xl-1 mx-auto mb-r">
                <h3 class="title font-bold"><strong>Paginas</strong></h3>

                <p><a href="#!">Inicio</a></p>
                <p><a href="#!">Historia</a></p>
                <p><a href="#!">Cronograma</a></p>
                <p><a href="#!">Contacto</a></p>
            </div>
            <!--/.Second column-->

            <!--Fourth column-->
            <div class="col-md-4 col-lg-4 col-xl-4">
                <h3 class="title font-bold"><strong>Contacto</strong></h3>

                <p><i class="fa fa-home mr-3"></i>San Carlos de Bariloche, Rio Negro, Argentina</p>
                <p><i class="fa fa-envelope mr-3"></i>info@example.com</p>
                <p><i class="fa fa-phone mr-3"></i>02944805147</p>
            </div>

        </div>
    </div>

</footer>

  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>
