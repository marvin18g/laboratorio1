<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="post.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>

  <style>

body{
  background-image:url("img/sav.jpg");
  font-family: 'Poppins', sans-serif;
}
</style>

  <body>

  <nav class="navbar navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">@Marvin Galeano</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">@Marvin Galeano</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="principal.php"><i class="bi bi-bell"></i>    Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="mascota.php"><i class="bi bi-bug-fill"></i>    Mascotas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Dueño.php"><i class="bi bi-person-check"></i>   Dueño</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Medicamento.php"> <i class="bi bi-capsule"></i>   Medicamento</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Opciones
            </a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" href="index.php">Salir</a></li>
              <li><a class="dropdown-item" href="#"></a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#"></a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex mt-3" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </div>
</nav>

<br>





  <br>

  <br>

<br>
  <section class="d-flex justify-content-center">
    <div class="card col-sm-6 p-3">
      
        <div class="mb-3">
            <h2>Datos del Dueño</h2>
        </div>
        <form action="recibirdueño.php" method="post">
        <div class="row">

   
  <div class="col">
  <br>
    <input type="text" class="form-control" placeholder="Nombre" aria-label="name" name="name" id="name">
  </div>

  <div class="col">
  <br>
    <input type="text" class="form-control" placeholder="Email" aria-label="email" name="email" id="email">
  </div>
  


</div>

<div class="row">
  <div class="col">
  <br>
    <input type="text" class="form-control" placeholder="Telefono" aria-label="tel"name="tel" id="tel" >
  </div>


  <div class="col">
  <br>
    <input type="text" class="form-control" placeholder="Direccion" aria-label="dir" name="dir" id="dir">
  </div>
</div>

<div class="row">
  <div class="col">
  <br>
    <input type="text" class="form-control" placeholder="DUI" aria-label="Dui" name="dui" id="dui">
  </div>


  <div class="col">
  <br>
    <input type="text" class="form-control" placeholder="Estado" aria-label="estado" name="estado" id="estado">
  </div>
</div>
<div class="row">
  <div class="col">
  <br>

  

    <input type="text" class="form-control" placeholder="Edad" aria-label="Edad" name="edad" id="edad">
    
  </div>
  <div class="col">
  <br>
    <input type="text" class="form-control" placeholder="Automovil" aria-label="auto" name="auto" id="auto">

  </div>
</div>
<br>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Motivo de consulta</label>
  <textarea class="form-control" id="datos" rows="3" name="datos" ></textarea>
  <br>
    
    <button class="btn btn-success" type="submit">Enviar</button>
</div>

        </div>
        
    </div>
    
    </form>
  </section>



   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>