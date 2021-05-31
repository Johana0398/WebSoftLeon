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
</head>
<body>


<div class="col-12 my-1 py-1 acordeonCont">
<!-- Acordeon -->
<div class="container col-9" id="acordeon">
  
<!-- Primer Tarjeta --> 
  <div class="card border rounded-pill m-4">
    <div class="card-header border rounded-pill" id="headingOne">
      <a href="#" class="card-title link-secondary" data-toggle="collapse" data-target="#collapseOne"><h2>¿Quiénes Somos?</h2></a>
    </div>
  </div>
  <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#acordeon">
    <div class="card-body m-4" id="textNosotros">
      <h4><strong> En SoftLeón, somos una empresa Leonesa especializada en desarrollo de Software, gracias a nuestro equipo de Ingenieros altamente capacitados en el desarrollo de aplicaciones y programas informáticos.</strong>
      <br>
      <br>
      <strong>Nuestro objetivo es ofrecer Soluciones Tecnológicas que faciliten la gestión de los negocios, mediante un Software innovador y fácil de usar, que se ajusta a las necesidades de cada uno de nuestros clientes, permitiendo la optimización de sus procesos; asesorados en todo momento por nuestros técnicos especializados.</strong></h4>
    </div>
  </div>

<!-- Segunda Tarjeta -->
 <div class="card border rounded-pill m-4 -y-1">
    <div class="card-header border rounded-pill" id="headingTwo">
      <a href="#" class="card-title link-secondary" data-toggle="collapse" data-target="#collapseTwo" id="mision"><h2>Misión</h2></a>
    </div>
  </div>
  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#acordeon">
    <div class="card-body m-4" id="textMision">
      <h4><strong>Ofrecer un Software seguro, confiable, de alta calidad para satisfacer las necesidades de nuestros clientes. </strong></h4>
    </div>
  </div>

<!-- Tercer Tarjeta -->
  <div class="card border rounded-pill m-4 m-y-1">
    <div class="card-header border rounded-pill" id="headingThree">
      <a href="#" class="card-title link-secondary" data-toggle="collapse" data-target="#collapseThree"><h2>Visión</h2></a>
    </div>
  </div>
  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#acordeon">
    <div class="card-body m-4" id="textVision">
    <h4><strong>Posicionarnos para el 2025 como una empresa desarrolladora de Software confiable a nivel local y nacional, gracias a la formación de nuestro equipo especializado de Ingenieros altamente competitivos en la industria.</strong></h4>
    </div>
  </div>
</div>
</div>



<div class="container-fluid contValores">
  <div class="row">

    <div class="col-12 col-md-12 col-xl-12 my-3 py-3">
      <h2><strong>Valores</strong></h2>
    </div>
    
    <div class="col-12 col-md-4 col-xl-2 mb-3 pb-3">
      <i class="fas fa-user-check fa-3x"></i><p><b>Respeto</b></p>
    </div>

    <div class="col-12 col-md-4 col-xl-3 mb-3 pb-3">
      <i class="fas fa-clipboard-check fa-3x"></i><p>Compromiso</p>
    </div>
    
    <div class="col-12 col-md-4 col-xl-2 mb-3 pb-3">
      <i class="fas fa-headset fa-3x"></i><p>Actitud de servicio</p>
    </div>    

    <div class="col-12 col-md-6 col-xl-3 mb-3 pb-3">
      <i class="fas fa-users fa-3x"></i><p>Trabajo en equipo</p>
    </div>

    <div class="col-12 col-md-6 col-xl-2 mb-3 pb-3">
      <i class="fas fa-lightbulb fa-3x"></i><p>Creatividad e innovación</p>
    </div>

  </div>
</div>

<!-- Logros -->
<div id="logros">
</div>


</body>
</html>
<?php
  include_once('footer.php');
?>