<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/main.css">

    <title>AllPlants</title>
  </head>
  <body>
  <!--========================================================== -->
                        <!-- ENCABEZADO -->
  <!--========================================================== -->
    <header class="encabezado">
    <nav  class="navbar navbar-expand-lg navbar-light p-3"  id="menu" style="background-color: #5adf6c;">
        <div class="container">
          <a class="navbar-brand" href="home.php">
              <span class="fs-5 text-light fw-bold">AllPlants</span>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="home.php">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#equipo">Conócenos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="administrar.php">Administrar</a>
              </li>
            </ul>
            <form class="d-flex">
              <nav class="nav nav-pills flex-column flex-sm-row">
                <a class="flex-sm-fill text-sm-center nav-link" href="index.php"><span class="text-light">Entrar</span></a>
              </nav>
            </form>
          </div>

        </div>
      </nav>
    </header>

    <!--========================================================== -->
                        <!-- SLIDER DE IMAGENES-->
    <!--========================================================== -->
   
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6" aria-label="Slide 7"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="7" aria-label="Slide 8"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="8" aria-label="Slide 9"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="9" aria-label="Slide 10"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item imgresize active">
          <img src="img/algoncillo.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Algodoncillo tropical</h5>
            <p>Asclepias curassavica.</p>
          </div>
        </div>
        <div class="carousel-item imgresize">
          <img src="img/Amapola.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Cacalosúchil</h5>
            <p>Plumeria rubra.</p>
          </div>
        </div>
        <div class="carousel-item imgresize">
          <img src="img/avedeparaiso.jpeg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Ave del paraíso</h5>
            <p>Miconia argentea.</p>
          </div>
        </div>
        <div class="carousel-item imgresize">
          <img src="img/capulincillo.jpeg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Capulincillo</h5>
            <p>Miconia argentea.</p>
          </div>
        </div>
        <div class="carousel-item imgresize">
          <img src="img/cardenala.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Cardenala encarnada</h5>
            <p>Lobelia cardinalis.</p>
          </div>
        </div>
        <div class="carousel-item imgresize">
          <img src="img/espigas.jpeg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Espiga de fuego</h5>
            <p>Odontonema strictum.</p>
          </div>
        </div>
        <div class="carousel-item imgresize">
          <img src="img/Mangle.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Mangle rojo</h5>
            <p>Rhizophora mangle.</p>
          </div>
        </div>
        <div class="carousel-item imgresize">
          <img src="img/pachira.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Zapote de agua</h5>
            <p>Pachira aquatica.</p>
          </div>
        </div>
        <div class="carousel-item imgresize">
          <img src="img/rosa.jpeg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Rosa amarilla</h5>
            <p>Cochlospermum vitifolium</p>
          </div>
        </div>
        <div class="carousel-item imgresize">
          <img src="img/uva.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Uva de playa</h5>
            <p>Coccoloba uvifera.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>  
    
        
     
    <!--========================================================== -->
                        <!-- INTRODUCCION DE SERVICIOS-->
    <!--========================================================== -->


    <section class="d-flex flex-column justify-content-center align-items-center pt-5  text-center w-50 m-auto" id="intro">
    <h1 class="p-3 fs-2 border-top border-3">Un sitio para conocer la flora</h1>
     <p class="p-3  fs-4">
        <span class="text-success">AllPlants</span> es la pagina web ideal para aquellos entusiastas dispuestos a dar a conocer su afición por la fotografía y la flora.</p>   
    </section>
  

    <!--========================================================== -->
                        <!-- SECCION ACERCA DE NOSOTROS-->
    <!--========================================================== -->

<section>
    <div class="container w-50 m-auto text-center" id="equipo">
        <h1 class="mb-5 fs-2">Equipo pequeño con <span class="text-primary">resultados Grandes</span>.</h1>
        <p class="fs-4 ">Siempre buscamos las personas adecuadas para que trabajen con nosotros. Si te sientes listo para este reto, te esperamos para que te unas a nosotros.</p>
    </div>

    <div class="mt-5 text-center">
        <img id="img-equipo" src="./img/equipo.jpg" alt="equipo">
    </div>

    <div id="local" class="border-top border-2">
        <div class="mapa"> </div>
        <div>
            <div class="wrapper-local">
                <h2>Ubicado en Veracruz, México</h2>
                <h2 class="text-light mb-4" id="typewriter"></h2>
                <p class="fs-5 text-body">Elijimos Miami para nuestra oficina con el objetivo de estar cerca a nuestros clientes. Estamos ubicados en Brickell, el corazon y el centro financiero de Miami, cerca de los mejores restaurantes, tiendas y tan solo 15 minutos de las playas. ¡Visitennos y no se arrepentiran!</p>
                <section class="d-flex justify-content-start" id="numeros-local">
                    <div>
                        <p class="text-light fs-5">20 °C</p>
                        <p>Temperatura Minima</p>
                    </div>
                    <div>
                        <p class="text-light fs-5">28 °C</p>
                        <p>Temperatura Máxima</p>
                    </div>
              </section>
            </div>
        </div>
    </div>

</section>


<!--========================================================== -->
                        <!-- SECCION CONTACTOS-->
<!--========================================================== -->

<section id="seccion-contacto" class="border-bottom border-secondary border-2">
  <div id="bg-contactos">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#1b2a4e" fill-opacity="1" d="M0,32L120,42.7C240,53,480,75,720,74.7C960,75,1200,53,1320,42.7L1440,32L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path></svg>
  </div>


<!--========================================================== -->
                      <!-- CONTENEDOR DEL FORMULARIO -->
<!--========================================================== -->

  <div class="container  border-top border-primary " style="max-width: 500px" id="contenedor-formulario">
      <div class="text-center mb-4" id="titulo-formulario">
        <div><img src="./img/support.png" alt="" class="img-fluid ps-5"></div>
        <h2>Contactanos</h2>
        <p class="fs-5">¿Tienes sugerencias? envialas a continuación</p>
      </div>

     

      <form   method="POST" data-netlify="true" action="#">     
            <div class= "mb-3">           
              <input type="email" class="form-control" id="email" name="email" placeholder="nombre@ejemplo.com">
            </div>
 
          
            <div class="mb-3">            
              <input type="input" class="form-control" id="name" name="name" placeholder="Nombre Completo">
            </div>
      

            <div class="mb-3">
              <input type="tel" class="form-control" name="phone" id="phone" placeholder="Teléfono">
            </div>

          <div class="mb-3">       
            <textarea class="form-control" name="message" id="message" rows="4"></textarea>
          </div>

          <div class="mb-3">
            <button type="submit" class=" btn btn-primary w-100 fs-5">Enviar Mensaje</button>
          </div>
      </form>
  
  </div>
</section>


<!--========================================================== -->
                        <!--FOOTER-->
<!--========================================================== -->


<footer class="w-100  d-flex  align-items-center justify-content-center flex-wrap">
  <p class="fs-5 px-3  pt-3">AllPlants. &copy; Todos Los Derechos Reservados 2022</p>
  <div id="iconos" >
      <a href="#"><i class="bi bi-facebook"></i></a>
      <a href="#"><i class="bi bi-twitter"></i></a>
      <a href="#"><i class="bi bi-instagram"></i></a>  
  </div>
</footer>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script> 
    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
    <script src="main.js"></script>
  </body>
</html>