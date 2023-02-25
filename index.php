<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Web Libreria</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="Admin/dist/css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;400;500&display=swap" rel="stylesheet">
  <link rel="shortcut icon" href="imagenes/logo.ico" type="image/x-icon">
</head>

<body>
  <!-- menú -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light menu">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php"><img src="Admin/Imagenes/Logo.png" alt="Logo rich seasoning food"
          class="logo"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto me-2">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#conslta libros.php">Libro</a>
          <li class="nav-item">
            <a class="nav-link" href="#Servicios">Servicios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#Contacto">Contacto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn-danger " href="https://wa.me/3043685787?text=%C2%A1Haz%20tu%20pedido%20aqu%C3%AD!"
              tabindex="-1">¡Haz tu pedido!</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Slide -->
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="Admin/Imagenes/Niño leyendo.jpg" class="d-block w-100 alto" alt="...">
      </div>
      <div class="carousel-item">
        <img src="Admin/Imagenes/leer.jpg" class="d-block w-100 alto " alt="...">
      </div>
      <div class="carousel-item">
        <img src="Admin/Imagenes/leer 2.jpg" class="d-block w-100 alto" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!-- La carta -->
  <div class="row row-cols-1 row-cols-md-3 g-4 p-5" id="Menú">
    <h2 class="titulo">La Carta</h2>
    <div class="col">
      <div class="card">
        <img src="imagenes/Img 6.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Hamburguesa</h5>
          <p class="card-text">Pollo,Cerdo y Res</p>
          <a href="https://wa.me/3043685787?text=%C2%A1Haz%20tu%20pedido%20aqu%C3%AD!" class="btn btn-primary">Pedir</a>
        </div>
      </div>

    </div>

    <div class="col">
      <div class="card">
        <img src="imagenes/Img 3.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Pizza</h5>
          <p class="card-text">Hawaiana,Pepperoni,Mixda,Pollo, 4 quesos y Jamon y tosineta</p>
          <a href="https://wa.me/3043685787?text=%C2%A1Haz%20tu%20pedido%20aqu%C3%AD!" class="btn btn-primary"
            target="_blank">Pedir</a>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card">
        <img src="imagenes/Img 4.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.</p>
          <a href="https://wa.me/3043685787?text=%C2%A1Haz%20tu%20pedido%20aqu%C3%AD!" class="btn btn-primary"
            target="_blank">Pedir</a>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card">
        <img src="imagenes/Img 5.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.</p>
          <a href="https://wa.me/3043685787?text=%C2%A1Haz%20tu%20pedido%20aqu%C3%AD!" class="btn btn-primary"
            target="_blank">Pedir</a>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card">
        <img src="imagenes/Img 9.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.</p>
          <a href="https://wa.me/3043685787?text=%C2%A1Haz%20tu%20pedido%20aqu%C3%AD!" class="btn btn-primary"
            target="_blank">Pedir</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="imagenes/Img 7.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.</p>
          <a href="https://wa.me/3043685787?text=%C2%A1Haz%20tu%20pedido%20aqu%C3%AD!" class="btn btn-primary"
            target="_blank">Pedir</a>
        </div>
      </div>
    </div>

  </div>

  <!-- Servicios -->
  <div class="row row-cols-1 row-cols-md-2 g-4 p-5" id="Servicios">
    <h2 class="titulo">Servicios</h2>
    <div class="col">
      <div class="card">
        <img src="imagenes/recetas.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Recetas</h5>
          <p class="card-text">Pollo,Cerdo y Res</p>
          <a href="https://wa.me/3043685787?text=%C2%A1Haz%20tu%20pedido%20aqu%C3%AD!" class="btn btn-primary">Pedir</a>
        </div>
      </div>

    </div>

    <div class="col">
      <div class="card">
        <img src="imagenes/domicilio.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Domicilio</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.</p>
          <a href="https://wa.me/3043685787?text=%C2%A1Haz%20tu%20pedido%20aqu%C3%AD!" class="btn btn-primary"
            target="_blank">Pedir</a>
        </div>
      </div>
    </div>


  </div>

  <!--Contacto-->
  <section  id="Contacto">
    <h2 class="titulo">Contacto</h2>
    <form action="mailto:lunalucia208@gmail.com" method="post">
      <div>
        <input type="text" placeholder="Escribir nombre" required name="nombre">
      </div>

      <div>
        <input type="text" placeholder="Escribir apellido" required name="apellido">
      </div>

      <div>
        <input type="email" placeholder="Escribir email" required name="email">
      </div>

      <div>
        <textarea name="mensaje" id="" cols="30" rows="10" placeholder="mensaje"> </textarea>
      </div>

      <div>
        <button type="submit" class="btn btn-warning">Enviar</button>
        <button type="submit" class="btn btn-danger">Cancelar</button>
      </div>

      </div>
    </form>

    <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdUHXbtYaQyHw8odsnOnYT6Q1u4kFXjfcMiO9zOSnStGTX46w/viewform?embedded=true" width="640" height="400" frameborder="0" marginheight="0" marginwidth="0">Cargando…</iframe>
  </section>

  <!--footer-->
  <footer class="cover">
    &copy;2023,Todos los derechos reservados Restaurante Rich seasoning foot, Crado por:<a href="#" target="_blank"> Ana Blandón</a>
  </footer>

 




  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>
</body>

</html>