<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
   integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
   crossorigin="anonymous">

   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</head>
<body>
    
 <!--aqui va a ir el header-->
  
 <img src="../img/logo.svg" class="img-responsive" align="left">
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <span class="fs-3">Instituto de Educacion de Aguascalientes</span>
        </header>
        <!-- lista -->
        <ul class="nav nav-pills justify-content-center">
            <!-- le metemos datos a la lista -->
            <li class="nav-item"><a href="#" class="nav-link" aria-current="page">Homepage</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Mision Vision y Valores</a></li>
            <li class="nav-item"><a href="CRUD.php" class="nav-link">Crud de datos</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Contacto</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Acerca de</a></li>
          </ul>
    </div>   
<!-- -->

<div id="carouselExampleDark" class="carousel carousel-dark slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="../img/IEA.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Instituto de Educacion de Aguascalientes</h5>
        <p>desde nose que año esta en operacion esta institucion del estado de ags</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="../img/IEA.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>ubicacion del IEA</h5>
        <p>salida a San Luis Potosi Cerca del Instituto Tecnologico de Ags</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="../img/IEA.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Depto. Informatica</h5>
        <p>donde te podes enrolar y hacer cosas como esas </p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</body>
</html>