<?php
  session_start();
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
  <script src="../js/scripts.js"></script>
  <script src="jquery-3.4.0.min.js"></script>
  <script type="text/javascript" src="../js/server.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</head>
<body>
  <?php
  // TODO: Crear estils articles
    include('login.php'); // Conexio
  ?>
  <div id="headerBotiga" >
    <?php
    if (isset($_SESSION['usuari'])) {
        echo '<a href="tancaSessio.php">
        <div class="user">
          <i id="ico" class="far fa-user"><span style="font-family: Arial"> Surt</span></i>
        </div>
      </a>';
    }
   ?>
    <button onclick="topFunction()" id="myBtn" title="amunt">▲</button>
    <!--Menu superior-->
  <div id="mySidebar" class="sidebar">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <a href="../index.php">Inici</a>
    <?php
        if (isset($_SESSION['usuari'])) {
            echo '<a href="crm.php">CRM</a>';
        } else {

          echo '<!-- FORM LOGIN -->
          <a class="open-button" onclick="openForm()"><i class="far fa-user"></i> Entra</a>

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
          <!-- FI FORM -->';
        }
?>

  </div>
  <div id="main">
    <?php
      if (!isset($_SESSION["usuari"])) {
        echo '<div class="llista_compra"><span class="mdl-badge" data-badge="4"><i class="fas fa-shopping-cart"></i></span></div>';
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
