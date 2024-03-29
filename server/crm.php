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
  <link rel="stylesheet" href="../css/estilsCrm.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <script src="../js/jquery-3.4.1.min.js"></script>
  <script src="../js/scripts.js"></script>
</head>
<body>
  <?php
    include('login.php'); // Conexio
  ?>
  <div class="pimg1">
    <a href="tancaSessio.php">
    <div class="user">
      <i id="ico" class="far fa-user"><span style="font-family: Arial"> Surt</span></i>
    </div>
    </a>
    <button onclick="topFunction()" id="myBtn" title="amunt">▲</button>
    <!--Menu superior-->
  <div id="mySidebar" class="sidebar">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <a href="../index.php">Inici</a>
    <a href="botiga.php">Botiga</a>
  </div>
  <div id="main">
    <button class="openbtn" id="icoMenu" onclick="controlaBoto()">☰</button>
  </div>
    <!--Fi menu superior-->
    <div class="panell">
      <?php include('panell.php'); ?>
    </div>
</body>
</html>
