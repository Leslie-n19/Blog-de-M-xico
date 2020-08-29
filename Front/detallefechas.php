<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Leslie Nuñez y Heriberto Hurtado">
  <link rel="icon" href="../img/Icono.png">

  <title>Efemérides de México</title>
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
    <?php
        require "../Back/conecta.php";
        $id = $_GET["id"];
        $sql = "SELECT * FROM fechas WHERE id = '$id'";
        $res = mysqli_query($con , $sql);
        $row = mysqli_fetch_assoc($res);
    ?>

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
  <header class="masthead">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1><?= $row['titulo']?></h1>
            <span class="subheading">Un recorrido por nuestro pais</span>
          </div>
        </div>
      </div>
    </div>
  </header>
    
    <?= $row['titulo']?>
    <hr>
    <?= $row['descripcion']?>
    <hr>
    <img src="../img/<?= $row['imagen']?>">
 
</body>

</html>