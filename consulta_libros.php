<?php
//funciona para iniciar login o actualizar buffer
ob_start();

?>

<?php
// //utilizar el archivo conexion.php
// include_once 'Admin/conexion.php'
// //sincronizar la base de datos con una funcion
// $conm = mysqli_connect($host,$user,$pw,$db)
// //control para confirmar el cliente
// if(isset($_SESSION['idcliente'])){
//     header(location:'index.php');
// }
?>

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
            <a class="nav-link" href="consulta_libros.php">Libros</a>
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

   <!--info-->
   <div class="row row-cols-1 row-cols-md-3 g-4 p-5" id="libros">
   <h2 class="titulo">Libros</h2>
    <table class="table table-stiped">
            <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
            </tr>
        </thead>
    <tbody>
    <?php
      include_once "admin/conexion.php"
      //crear la conexion a la bd
      $conm = mysqli_connect($host,$user,$pw,$db);
      //crear una consulta a la base de datos 
      $sql = "SELECT * FROM libros;";
      //preparar el array de imprimir n datos while
      $result = mysqli_query($conm,$sql);
      //estructura de loop para imprimir n datos while
      while ($rom = mysqli_fetch_assoc($result)){

      ?>
      <tr>
      
      <td><?php each row ['nombre']?></td>
      <td><?php each row ['isbn']?></td>
      <td><?php each row ['precio']?></td>

      <td><?php each row "<img src='admin/".$row['imagen']>"' 
      width="50" height="50">";""?></td>
      <td><?php echo $row ['descripcion']?></td>
        
      </tr>
      <?php
     }
  
            <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            </tr>
            <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            </tr>
            <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
            </tr>
    </tbody>
    </table>

      
   </div>




  <!-- La carta -->
  <div class="row row-cols-1 row-cols-md-3 g-4 p-5" id="Menú">
    <h2 class="titulo">Novedades</h2>
    <div class="col">
      <div class="card">
        <img src="https://images.cdn2.buscalibre.com/fit-in/360x360/d1/93/d193f26e4a808e88ff0a23e55bea4d2a.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Grandes Juicios de la Historia</h5>
          <p class="card-text">Disponible</p>
          <a href="https://wa.me/3043685787?text=%C2%A1Haz%20tu%20pedido%20aqu%C3%AD!" class="btn btn-primary">Pedir</a>
        </div>
      </div>

    </div>

    <div class="col">
      <div class="card">
        <img src="https://images.cdn2.buscalibre.com/fit-in/360x360/2a/2b/2a2b983ea5c91c318be33295fccbd4e5.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">El Abogado de la Mafia</h5>
          <p class="card-text">Disponible</p>
          <a href="https://wa.me/3043685787?text=%C2%A1Haz%20tu%20pedido%20aqu%C3%AD!" class="btn btn-primary"
            target="_blank">Pedir</a>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card">
        <img src="https://images.cdn1.buscalibre.com/fit-in/360x360/64/75/64757328931fdd11e40ac0c459018f8b.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">De los Delitos y de las Penas</h5>
          <p class="card-text">Disponible
            </p>
          <a href="https://wa.me/3043685787?text=%C2%A1Haz%20tu%20pedido%20aqu%C3%AD!" class="btn btn-primary"
            target="_blank">Pedir</a>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card">
        <img src="https://images.cdn2.buscalibre.com/fit-in/360x360/cf/5b/cf5b3c38320d44389627949806ff7839.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Al final Mueren los dos</h5>
          <p class="card-text">Disponible
            </p>
          <a href="https://wa.me/3043685787?text=%C2%A1Haz%20tu%20pedido%20aqu%C3%AD!" class="btn btn-primary"
            target="_blank">Pedir</a>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card">
        <img src="https://images.cdn1.buscalibre.com/fit-in/360x360/a6/67/a66742b33042f121e4c0366e7a3ee38b.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">El Mapa de los Anhelos</h5>
          <p class="card-text"> Disponible
            </p>
          <a href="https://wa.me/3043685787?text=%C2%A1Haz%20tu%20pedido%20aqu%C3%AD!" class="btn btn-primary"
            target="_blank">Pedir</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="https://images.cdn3.buscalibre.com/fit-in/360x360/b2/4c/b24c90004f9de910f18b314933bbb0ff.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">El Principito</h5>
          <p class="card-text"> Disponibles
            </p>
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
        <img src="https://lamenteesmaravillosa.com/wp-content/uploads/2020/01/muchos-libros.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Libros</h5>
          <p class="card-text">Libros mas recomendados</p>
          <a href="https://wa.me/3043685787?text=%C2%A1Haz%20tu%20pedido%20aqu%C3%AD!" class="btn btn-primary">Aqui</a>
        </div>
      </div>

    </div>

    <div class="col">
      <div class="card">
        <img src="https://www.seguridadvialenlaempresa.com/media/blog/consejos-seguridad-repartidores-coronavirus-768x520-1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Domicilio</h5>
          <p class="card-text">Contra Entrega
            </p>
          <a href="https://wa.me/3043685787?text=%C2%A1Haz%20tu%20pedido%20aqu%C3%AD!" class="btn btn-primary"
            target="_blank">Pide tu libro aqui</a>
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
<?php
ob_end_flush ();
?>