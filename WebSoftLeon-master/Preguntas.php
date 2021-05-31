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
  <title>Preguntas Frecuentes</title>
</head>
<body>
<div class="container-fluid sf">
    <h1>Preguntas Frecuentes</h1>
</div> 
<div id="accordion" class="sf2">
<div class=" col-12 col-md-12 col-xl-11 mx-auto">
  <div class="card">
    <div class="card-header" style="min-height: 5vw;">
      <a class="card-link st" data-toggle="collapse" href="#collapseOne"><i class="far fa-question-circle"></i>
        Pregunta 1
      </a>
    </div>
    <div id="collapseOne" class="collapse" data-parent="#accordion">
      <div class="card-body st2">
        Lorem ipsum..
      </div>
    </div>
  </div>
  </div>

  <div class=" col-12 col-md-12 col-xl-11  mx-auto">
  <div class="card">
    <div class="card-header" style="min-height: 5vw;">
      <a class="collapsed card-link st" data-toggle="collapse" href="#collapseTwo"><i class="far fa-question-circle"></i>
        Pregunta 2
      </a>
    </div>
    <div id="collapseTwo" class="collapse" data-parent="#accordion">
      <div class="card-body st2">
        Lorem ipsum..
      </div>
    </div>
  </div>
  </div>

  <div class=" col-12 col-md-12 col-xl-11  mx-auto">
  <div class="card">
    <div class="card-header" style="min-height: 5vw;">
      <a class="collapsed card-link st" data-toggle="collapse" href="#collapseThree"><i class="far fa-question-circle"></i>
        Pregunta 3
      </a>
    </div>
    <div id="collapseThree" class="collapse" data-parent="#accordion">
      <div class="card-body st2">
        Lorem ipsum..
      </div>
    </div>
  </div>
  </div>
</div>
</body>
</html>
<?php
  include_once('footer.php');
?>