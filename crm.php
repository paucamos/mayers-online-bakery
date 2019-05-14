<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Botiga Online</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="./estils.css">
  <link rel="stylesheet" type="text/css" href="./slider.css">
  <link rel="stylesheet" href="css/estilsMenu.css">
  <link rel="stylesheet" href="css/estilsContacta.css">
  <link rel="stylesheet" href="css/scroll.css">
  <link rel="stylesheet" href="css/estilLogin.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <script src="./js/scripts.js"></script>
  <link rel=”shortcut icon” type=”image/png” href=”/favicon.png”/>
</head>
<body>
  <?php
    include('login.php'); // Conexio
  ?>
  <div class="pimg1">
    <button onclick="topFunction()" id="myBtn" title="amunt">▲</button>
    <!--Menu superior-->
  <div id="mySidebar" class="sidebar">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <a href="./index.html">Inici</a>

    <!-- FORM LOGIN -->
    <a class="open-button" onclick="tancaSessio()"><i class="far fa-user"></i> Surt </a>

    <!-- FI FORM -->
  </div>
  <div id="main">
    <button class="openbtn" onclick="openNav()">☰</button>
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

      // TODO crear bucle mostra elements de la botiga

    ?>
  </section>
  <section class="section section-dark">
    <footer> Pau Camós Parra</footer>
  </section>
</body>
</html>
