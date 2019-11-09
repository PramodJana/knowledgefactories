<!doctype html>
<html lang="en">
  <head>
  <link href="style.css" rel="stylesheet">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!--Animate Css-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
       <!--Wow JS-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>


      <script>
           new WOW().init();
      </script>

      <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=PT+Serif&display=swap" rel="stylesheet">


    <title>Hello, world!</title>
  </head>
  <body style="margin-top:70px; font-family: 'PT Serif', serif;" id="main-page">
  <?php
  include "header.php";
  ?> 

<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/motivation1.jpg" class="d-block w-100" alt="..." height=500px>
    </div>
    <div class="carousel-item">
      <img src="img/motivation2.jpg" class="d-block w-100" alt="..." height=500px>
    </div>
    <div class="carousel-item">
      <img src="img/motivation3.jpg" class="d-block w-100" alt="..." height=500px>
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
<br>
  <div class="container">
    <hr>
      <div><center><h1>Trending Technologies</h1>
      <br>
      <a href="coming.php" target="_blank" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" >Cloud Computing</a>
      <a href="coming.php" target="_blank" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Artificial Intelligence</a>
      <a href="coming.php" target="_blank" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Data Analytics</a>
      <a href="coming.php" target="_blank" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Internet Of Things</a>
      <a href="coming.php" target="_blank" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Cyber Security</a>
      <a href="coming.php" target="_blank" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Hadoop</a>
      </center></div>
    <hr> 
  </div>
<br>

<div class="container">

</div>
<center><p style="font-size:40px">Let's Begin our journey...</p></center>
<div class="container">
    <div class="row">
      <div class="col-sm">  
        <img id="course" src="img/b-tech.PNG">
      </div>
      <div class="col-sm">  
        <img id="course" src="img/b-com.PNG">
      </div>
    </div>
<br>
    <div class="row">
      <div class="col-sm">  
        <img id="course" src="img/bba.PNG">
      </div>
      <div class="col-sm">  
        <img id="course" src="img/bsc.PNG">
      </div>
    </div>
</div>
<br>
<?php
  include "footer.php";
 ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
