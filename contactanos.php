<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contacto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">


  </head>
  <body>
   
  <?php include "resources/NAVBAR_BLANCA.php"?>

  <div class="container">
    <div class="row">
        <img src="img/banner2.jpg">
        <p> Contacto de Google Stadia | Latinoamérica </p>
    </div>

    <br>

    <div class="row">
      <!--Parte toda del formulario-->
      <div class="col-xl-9 col-lg-9 col-sm-12">
        <h1>Escríbenos, ¡resolveremos tus dudas!</h1>
        <br>
        <p>En Google estamos comprometidos al servicio al cliente, te brindamos la atención personalizada que necesitas.</p>
        <br>
        <span>Selecciona el tipo de solicitud</span>

        <br>

        <select class="form-select" aria-label="Default select example">
          <option selected>Selecciona el tipo de solicitud</option>
          <option value="1">Tipos de planes</option>
          <option value="2">Ayuda con suscripciones</option>
          <option value="3">Consultas empresariales</option>
        </select>

        <br>
        <span>Nombre completo</span>
        <br>
        <input class="form-control" type="text" placeholder="Nombre completo">
        <br>
        <span>Teléfono</span>
        <br>
        <input class="form-control" type="text" placeholder="Teléfono">
        <br>
        <span>Correo electrónico</span>
        <br>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Correo electrónico">
        <br>
        <span>Mensaje</span>
        <br>
        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Mensaje..." rows="3"></textarea>

        <br>
        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
          Acepto recibir otras comunicaciones de Google Stadia
        </label>
        <br>

        <a href="../inicio/index.html"><span class="abajo">Ver política de privacidad.</span></a>


      </div>

      <div class="col" id="dospuntosuve">
      <img src="img/stadiachan.png" width = 350 style=" position: absolute;  position: absolute;
                bottom: -14%;  width: 20% ; height: auto; padding:9px !important;  " class="img-fluid" id="dospuntosuve">
</div>
<br>
        <br>
        <center> 
          <button type="button" class="btn btn-dark btn-lg">Enviar</button>
        </center>
        
        <br>
        <br>
        <br>
        <br>
      </div>


  <?php include "resources/FOOTER.php"?>



  




    <script src="main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>