<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/style.css" />

    <title>AllPlants</title>
  </head>
  <body>
  <!--========================================================== -->
                        <!-- ENCABEZADO -->
  <!--========================================================== -->
  <header class="encabezado">
    <nav  class="navbar navbar-expand-lg navbar-light p-3"  id="menu" style="background-color: #5adf6c;">
        <div class="container">
          <a class="navbar-brand" href="index.php">
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
                        <!-- Conexion -->
    <!--========================================================== -->


    <?php
    
      if(isset($_POST['Entrar'])){
        if(empty($_POST['usuario']) || empty($_POST(['contra']))){
          echo "<script language='JavaScript'>
          alert('El usuario o contraseña no han sido ingresados');
          location.assign('index.php');
          </script>";
        }else{
          include("model/conexion.php");
          $nombre=$_POST['usuario'];
          $contraseña=$_POST['contra'];
          $sql="select * from persona where nombre='".$nombre."' and signo='".$contraseña."'";
          $resultado=mysqli_query($bd,$sql);
          if($resultado === TRUE){
            echo "<script language='JavaScript'>
            alert('Bienvenido');
            </script>";
            header('Location: home.php?mensaje=registrado');
          }else{
            echo "<script language='JavaScript'>
            alert('El nombre o contraseña son erróneos');
            location.assign('index.php');
            </script>";
          }
        }
      }else{

      
    ?>


    <!--========================================================== -->
                        <!-- Inicio sesion -->
    <!--========================================================== -->
   
    <div class="container2">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="<?=$_SERVER['PHP_SELF']?>" class="sign-in-form" method="post">
            <h2 class="title">Iniciar Sesión</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Usuario/Correo" name="usuario"/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Contraseña" name="contra"/>
            </div>
            <input type="submit" value="Entrar" class="btn solid" />
            <p class="social-text">O inicia sesión con tus redes sociales</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
          <?php
            }
          ?>
          <form action="#" class="sign-up-form">
            <h2 class="title">Registrarse</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Usuario" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Correo" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Contraseña" />
            </div>
            <input type="submit" class="btn" value="Registrarse" />
            <p class="social-text">O registrate con tus redes sociales</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Eres nuevo aquí?</h3>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
              ex ratione. Aliquid!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Registrar
            </button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Ya eres miembro?</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
              laboriosam ad deleniti.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Entrar
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    
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
    <script src="app.js"></script>
  </body>
</html>