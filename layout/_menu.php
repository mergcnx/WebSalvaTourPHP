<head>
  <link rel="stylesheet" href="css/acercade.css">
  <link rel="stylesheet" href="css/contacto.css">
  <link rel="stylesheet" href="css/font.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/menu.css">
  <link rel="stylesheet" href="css/slider.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<header>
  <div class="logo">
    <a href="#"><img src="img/logo.png" alt="Logo"></a>
  </div>

  <div class="control-menu">
    <a href="#navigation" class="open"><span class="fas fa-bars"></span></a>
    <a href="#" class="close"><span class="fas fa-rectangle-xmark"></span></a>
  </div>

  <nav id="navigation">
    <ul class="nav-items">
      <li><a href="index.php">Inicio</a></li>
      <li><a href="acercade.php">Acerca de</a></li>
      <li>
        <a href="#">Destinos</a>
        <ul>
          <li><a href="pages/bosqueImposible.php">Bosque El Imposible</a></li>
          <li><a href="#">Citalá</a></li>
          <li><a href="#">Lago de Coatepeque</a></li>
          <li><a href="#">Lago de Sushitlán</a></li>
          <li><a href="pages/playacobano.php">Playa los Cóbanos</a></li>
          <li><a href="pages/montecristo.php">Parque Nacional Montecristo</a></li>
          <li><a href="#">Ruinas de San Andrés</a></li>
          <li><a href="#">Volcán Chaparrastique</a></li>
        </ul>
      </li>
      <li><a href="contactos.php">Contacto</a></li>

      <li id="search"><input class="form-control" type="text" placeholder="Buscar..."></li>
      <?php
      if (isset($_SESSION['username'])) {
        echo "<li><a href='carrito.php'><i class='fas fa-shopping-cart'></i></a></li>";
        echo "<li><p class='user-log'><span class='fas fa-user'></span> " . $_SESSION['username'] . "</p></li>";
        echo "<li><a href='logout.php' class='logout'>Logout  <span class='fas fa-right-from-bracket'></span></a></li>";
      }
      ?>
    </ul>
  </nav>
</header>