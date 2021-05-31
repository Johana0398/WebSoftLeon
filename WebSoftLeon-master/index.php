<?php
  include_once('header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <script src="https://kit.fontawesome.com/0c7674100c.js" crossorigin="anonymous"></script>
  
  <link  href="css/style.css"  type="text/css" rel="stylesheet">
  <title>Soft Leon</title>
</head>
<body>
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/generic1.jpg" alt="First slide">
      <div class="carousel-caption">
        <h3 class="font">Imagen</h3>
        <p class="font">Descripción de la imagen</p>
        <button type="button" class="btn btn-primary btn-lg font2">Ver mas</button>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/generic2.jpg" alt="Second slide">
      <div class="carousel-caption">
        <h3 class="font">Imagen</h3>
        <p class="font">Descripción de la imagen</p>
        <button type="button" class="btn btn-primary btn-lg font2">Ver mas</button>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="container divSection">
  <div class="row">
    <div class="col-12 col-md-12 col-xl-4">
  
    <a class="optionButton ic" href=""><i class="fas fa-trophy fa-3x"></i><p>Logros</p></a>

    </div>
    <div class="col-12 col-md-6 col-xl-4">
      <a class="optionButton ic" href="ventas.php"><i class="fas fa-laptop-code fa-3x"></i><p>Productos</p></a>
    </div>
    <div class="col-12 col-md-6 col-xl-4">
     <a class="optionButton ic" href=""><i class="fas fa-code fa-3x"></i><p>Servicios</p></a>
    </div>    
  </div>
</div>

</body>
</html>
<?php
  include_once('footer.php');
?>