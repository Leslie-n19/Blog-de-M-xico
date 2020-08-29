<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../img/Icono.png">

  <title>Personajes de México</title>
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


  <!-- Bootstrap core CSS -->

  <!-- Custom styles for this template -->
  <link href="../css/clean-blog.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="index.php">Historia de México</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="../index.php">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="personajes.php">Personajes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="fechas.php">Fechas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contacto</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('../img/personajes.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Personajes de México</h1>
            <span class="subheading">Un recorrido por nuestro pais</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
       
        <?php 
          require "../Back/conecta.php";  //Conectar con la BD
          $sql = "SELECT * FROM personajes"; ///Seleccionar registros
          $res = mysqli_query($con, $sql); ///Si "$sql" es correcto (1/0)
          $num = mysqli_num_rows($res); ///Cuantos registros hay en nuestra bD
          
          ///Recorrido de todos los registros 
          for($i = $num; $personaje = $res->fetch_object() ; $i++)
            {
                ?>
 
          <div class="post-preview" id="<?= $personaje->id?>">
          <a href="detallepersonaje.php?id=<?=$personaje->id?>">
            <h2 class="post-title">
              <?= $personaje->nombre ?>
            </h2>
            <h3 class="post-subtitle">
              <?= $personaje->lugarNac ?>
            </h3>
          </a>
          <p class="post-meta">
            <?= $personaje->nac ?> 
            <?= $personaje->muerte?></p>
        </div>
          <hr>
          <?php
          }
          ?>
    
        <hr>
        <!-- Pager -->
        <div class="clearfix">
        
        </div>
      </div>
    </div>
  </div>

  <hr>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <ul class="list-inline text-center">
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          </ul>
          <p class="copyright text-muted">Copyright &copy; Your Website 2020</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/clean-blog.min.js"></script>

</body>

</html>