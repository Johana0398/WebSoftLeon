<?php
  include_once('header.php');
?>
<!DOCTYPE HTML> 
 
<html>
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
  <link  href="css/styleContacto2.css"  type="text/css" rel="stylesheet">
  
</head>
<body>  
  <div class="col-12 bg-dark my-1">
    <div class="row">
      <div class="col-xl-9 m-auto">              
                  <div class="card-body">
                            <!-- Form contact -->
                            <form class="form-cotizacion bg-dark">
                                <h2 class="titulo">Cotización</h2>  
                                <div class="md-form mb-3">
                                    <i class="fa fa-user prefix blue-text"></i>
                                    <input type="text" id="#" class="" placeholder="Nombre">
                                   
                                </div>
                                <div class="md-form">
                                    <i class="fa fa-envelope prefix blue-text"></i>
                                    <input type="text" id="#" class="" placeholder="Correo">
                                   
                                </div>
                                <div class="md-form">
                                    <i class="fa fa-tag prefix blue-text"></i>
                                    <input type="text" id="#" class="" placeholder="Asunto">
                                    <label for="form342"></label>
                                </div>
                                <div class="md-form">
                                    <i class="fa fa-pencil prefix blue-text"></i>
                                    <textarea type="text" id="#" class="md-textarea" style="height: 100px" placeholder="Describe el asunto.."></textarea>
                                    <label for="form82"></label>
                                </div>
                                <div class="text-center">
                                    <button class="btn btn-info btn-lg">Enviar</button>
                                 </div>
                            </form>
                            <!-- Form contact -->
                        </div>
                    </div>
               
                <!-- Grid column -->
    </div>
  </div>
<div>

<div class="row ">
 <div class="my-1 col-lg-6 m-auto col-sm-9 m-auto" >
  <div class="card-body contacto">
    <h2 class="card-title">Contacto</h2>
    <hr></hr>
    <h6 class="text-dark">Horarios de atención</h6>
        <li class="text-contacto">Lunes – Viernes <br>
           9:00 am- 20:00 pm Hora Centro 
        </li>
        <br>
        <li class="text-contacto">Sábado<br> 
        9:00 am- 14:00 pm Hora Centro 
        </li>
    <hr></hr>
    <li>
       <a href="#" class="icono"><i class="fab fa-facebook-square"></i> Soft León</a>
    </li>
    <li>
       <a href="#" class="icono2"><i class="fab fa-whatsapp" ></i> 477 374 7505</a>
    </li>
       <li> <a href="#" class="icono3"><i class="fas fa-envelope "></i> Softleon.2123@gmail.com  </a>
     </li>
    <a href="#" class="card-link"></a>
    <a href="#" class="card-link"></a>
   </div>
  </div>

  
  <div class="contacto-mapa col-lg-6 col-sm-9 m-auto">
     <div>
     <h4 class=" my-1 ">Ubicacion: León, Guanajuato, México. </h4>
   </div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3666.865560022505!2d-106.42374424876603!3d23.211569584783287!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x869f53996d1a7159%3A0x35f943fd2af46706!2sMonumento%20al%20Pescador!5e0!3m2!1ses!2smx!4v1621878481144!5m2!1ses!2smx" 
width="700" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>  
</div>
</div>



</body>
</html>
<?php
  include_once('footer.php');
?>