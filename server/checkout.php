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
          } else {
              echo '<a href="botiga.php">Botiga</a>';
          }

        } 
?>
  </div>
  <div id="main">
    <button class="openbtn" id='icoMenu' onclick="controlaBoto()">☰</button>
  </div>
    <!--Fi menu superior-->

    <div class="ptext">
      <span class="border">
        Resum Compra
      </span>
    </div>
  </div>
  <section id="serveis" class="section section-light">
    <h2>Resum</h2>
      <?php
        include('conexio.php');
        include('resumCompra.php');
       ?>
  </section>
  <section class="section section-dark">
    <footer> Pau Camós Parra</footer>
  </section>
</body>
</html>
