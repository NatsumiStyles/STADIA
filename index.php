<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Google Stadia</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
   
        
        
        a[sp="linknav"]{
            font-family: 'Roboto', sans-serif; 
      
            color: white !important;
         
        }

                
        h1[sp="titulo_principal"]{
            font-family: 'Roboto', sans-serif; 
            
            color: white !important;
         
        }

        a[tp="final"]{
          color: rgb(31, 31, 31);
          margin: 0px 10px;

        }

        img[tp="imgs"]{
          display: inline-block; 
          width: 12rem;
          margin: 10px 5px;
          border-radius: 6px;
        }


        a{
            text-decoration: none;
        }
    </style>
 </head>
  <body>
  
  <?php include "resources/NAVBAR_NEGRA.php"?>

<div class="container-fluid" style="background-color: black; height:600px;" id="ide">
    <h1 style="text-align: center; color: white; padding: 200px 0px 0px 0px; font-weight: bolder; font-size: 60px;" sp="titulo_principal">Stadia cierra el 18 de enero del 2023.</h1>
    <p style="text-align: center; color: white; font-size: 20px; margin-bottom: 100px;">Consulta información actualizada en nuestro Centro de Ayuda.</p>
    <center>
    <a href="#" style="background: linear-gradient(90deg,rgba(248,73,27,1) 0%,rgba(241,47,63,1) 50%,rgba(220,24,96,1) 100%); padding: 20px 100px; border-radius: 5px; color: white; font-size: 20px;">Más información</a>
</center>
</div>

<div class="container">
    <h1 style="text-align: center; margin-top: 30px;">Sáltate el registro y juega ya</h1>
    <p style="text-align: center;">Juega a estas pruebas sin una cuenta de Stadia.</p>
<center style="margin-bottom: 175px;">
<div class="col" style="margin: 60px 0px;">
    <img src="img/1.webp" tp="imgs">
    <img src="img/2.webp" tp="imgs">
    <img src="img/3.webp" tp="imgs">
    <img src="img/4.webp" tp="imgs">
    <img src="img/5.webp" tp="imgs">
    <img src="img/6.webp" tp="imgs">


</div>

<a href="juegos.php" style="background-color: rgb(26, 26, 26); padding: 15px 60px; font-size: 20px; color: white; border-radius: 5px;">Pruebas de Videojuegos</a>
</center>
</div>


<?php include "resources/FOOTER.php"?> 








  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>