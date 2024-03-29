<?php
  include('session.php');
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Botiga Online</title>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" type="text/css" href="../css/estils.css">
  <link rel="stylesheet" href="../css/estilsMenu.css">
  <link rel="stylesheet" href="../css/estilsContacta.css">
  <link rel="stylesheet" href="../css/scroll.css">
  <link rel="stylesheet" href="../css/estilLogin.css">
  <link rel="stylesheet" href="../css/productes.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="../js/scripts.js"></script>
</head>
<body>
  <?php
  // TODO: Crear estils articles
    include('login.php'); // Conexio
    include('registre.php');
  ?>
  <div id="headerBotiga" >
  <?php
    if (isset($_SESSION['usuari'])) {
        echo '<a href="surtUser.php">
        <div class="logout">
          <i id="ico" class="fas fa-sign-out-alt"><span style="font-family: Arial"> Surt</span></i>
        </div>
      </a>';
    }
   ?>
  <?php 
    if (isset($_SESSION['usuari'])) {
      echo "<div class='user' ><i id='ico' class='far fa-user'></i> {$login_session}</div>";
    } 
  ?>
    
    <button onclick="topFunction()" id="myBtn" title="amunt">▲</button>
    <!--Menu superior-->
  <div id="mySidebar" class="sidebar">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <a href="../index.php">Inici</a>
    <?php
        if (isset($_SESSION['usuari'])) {
          if ($_SESSION['usuari'] == 'admin') {
            echo '<a href="crm.php">CRM</a>';
          }

        } else {
            echo '<!-- FORM LOGIN -->
          <a class="open-button" onclick="openForm()"><i class="far fa-user"></i> Entra</a>
          <a class="register-button" onclick="openRegister()"><i class="fas fa-user-plus"></i> Registra\'t</a>

          <div class="form-popup" id="myForm">
            <form action="" class="form-container" method="post">
              <h1>Login</h1>

              <label for="usuari"><b>Usuari</b></label>
              <input type="text" placeholder="usuari.." name="username" required>

              <label for="psw"><b>Contrasenya</b></label>
              <input type="password" placeholder="contrasenya.." name="password" required>

              <button type="submit" class="btn" name="submit" >Login</button>
              <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
            </form>
          </div>
          <div class="form-popup" id="registre">
            <form action="" class="form-container" method="post">
              <h1>Registre</h1>

              <label for="usuari"><b>Nom d\'Usuari: </b></label>
              <input type="text" placeholder="usuari.." name="username" required>

              <label for="psw"><b>Contrasenya</b></label>
              <input type="password" placeholder="contrasenya.." name="password" required>

              <button type="submit" class="btn" name="registre" >Registra\'t</button>
              <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
            </form>
          </div>
          <!-- FI FORM -->';
        }
?>

  </div>
  <div id="main">
    <?php
      if (isset($_SESSION["usuari"])) {
        if (@!$_SESSION['usuari' == 'admin']) {
          echo '<div class="llista_compra" onclick="controlaLlista()" id="carrito">
                  <i class="fas fa-shopping-cart"></i>
                  <span id="carro" data-badge="4"></span>
                </div>';
          echo '<div class="llista_pop_up" id="llistaPop">';
          include("displayCarro.php");
          echo '
                <span id="carrito"></span>
              </div>';
        }
      }
    ?>
    <button class="openbtn" id='icoMenu' onclick="controlaBoto()">☰</button>
  </div>
    <!--Fi menu superior-->

    <div class="ptext">
      <span class="border">
        Botiga Online
      </span>
    </div>
  </div>
  <section id="serveis" class="section section-light">
    <h2>Articles</h2>
      <?php
        include('conexio.php');
        include('productes.php');
       ?>
  </section>
  <section class="section section-dark">
    <footer> Pau Camós Parra</footer>
  </section>
</body>
</html>
