<!doctype html>
<html lang="en">
  <head>
    <style>
    .card{
      margin: 20px 10px;
      border: none !important;
    }
    .btn-primary{
      background-color: rgb(43, 43, 43) !important;
      border: none !important;
    }
    
h5.card-title{
  color: red;
}
    
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Juegos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>



  <?php include "resources/NAVBAR_BLANCA.php"?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
   <center> 
    <p style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif ; font-size: 36px;"> Omite el registro y juega directamente</p>
   <p style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif ; color:  rgba(54, 53, 53, 0.808); font-size: 19px;"> Accede a estas pruebas de juegos antes de crear una cuenta de Stadia.</p>
  </center>

<!--1-->
    <div class="row" style="justify-content: center;">
      <div class="card" style="width: 18rem;">
        <img src="img/1.webp" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Worm game</h5><br><br>
          <a href="WormGame.php" class="btn btn-primary">Juega durante 180 min</a>
        </div>
      </div>

      <div class="card" style="width: 18rem;">
        <img src="img/2.webp" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">HOT WHEELS UNLEASHED™ - Game of the Year Edition</h5>
          <a href="HotWheels.php" class="btn btn-primary">Juega durante 180 min
          </a><br><br>
        </div>
      </div><br>

      <div class="card" style="width: 18rem;">
        <img src="img/3.webp" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Gravitar: Recharged</h5><br><br>
          <a href="GravitarRecharged.php" class="btn btn-primary">Juega durante 180 min</a>
        </div>
      </div>

      <div class="card" style="width: 18rem;">
        <img src="img/4.webp" class="card-img-top" alt="...">
        <div class="card-body">

          <h5 class="card-title">Black Widow: Recharged</h5><br><br>
          <a href="index.php" class="btn btn-primary">Juega durante 180 min</a>
        </div>
      </div>
</div>

<!--2-->
<div class="row" style="justify-content: center;">
  <div class="card" style="width: 18rem;">
    <img src="img/5.webp" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Asteroids: Recharged</h5><br><br>
      <a href="index.php" class="btn btn-primary">Juega durante 180 min</a>
    </div>
  </div>

  <div class="card" style="width: 18rem;">
    <img src="img/6.webp" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Breakout: Recharged</h5><br><br>
      <a href="index.php" class="btn btn-primary">Juega durante 180 min
      </a>
    </div>
  </div>

  <div class="card" style="width: 18rem;">
    <img src="img/7.webp" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Tri6: Infinite</h5><br><br>
      <a href="index.php" class="btn btn-primary">Juega durante 180 min</a>
    </div>
  </div>

  <div class="card" style="width: 18rem;">
    <img src="img/8.webp" class="card-img-top" alt="...">
    <div class="card-body">

      <h5 class="card-title">Are You Smarter than a 5th Grader?</h5><br>
      <a href="index.php" class="btn btn-primary">Juega durante 180 min</a>
    </div>
  </div>
</div>




</body>


<?php include "resources/FOOTER.php"?>

</html>