<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Benvingut a Mayers</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/estils.css">
  <link rel="stylesheet" href="css/estilsMenu.css">
  <link rel="stylesheet" href="css/estilsContacta.css">
  <link rel="stylesheet" href="css/scroll.css">
  <link rel="stylesheet" type="text/css" href="../css/estils.css">
  <link rel="stylesheet" href="css/estilLogin.css">
  <link rel="stylesheet" href="css/productes.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="js/scripts.js"></script>
  <link rel="icon" type=”image/png” href=”img/favicon.png/>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body>
  <div class="pimg1">
    <?php

     // TODO: sendgrid php : youtube watch later

      if (isset($_SESSION['usuari'])) {
          echo '<a href="server/tancaSessio.php">
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
    <a href="#nosaltres">Qui som</a>
    <a href="#serveis">Serveis</a>
    <!-- Control Sessio -->
    <?php
    if (isset($_SESSION['usuari'])) {
        // session isn't started
        echo '<a href="./server/botiga.php">Botiga</a>';
        echo '<a href="./server/crm.php">CRM</a>';
    } else {
        echo '<a href="./server/botiga.php">Botiga</a>';
    }
     ?>

    <a href="#contacta">Contacta</a>
  </div>
  <div id="main">
    <?php
      if (!isset($_SESSION["usuari"])) {
          echo '<div class="llista_compra" onclick="controlaLlista()">
                  <i class="fas fa-shopping-cart"></i>
                  <span id="carro" data-badge="4"></span>
                  <div class="llista_pop_up" id="llistaPop">
                    <h4> Llista de la compra: </h4>';
          include("server/displayCarro.php");
          echo '
                    <span id="carrito"></span>
                  </div>
                </div>';
      }
    ?>
    <button class="openbtn" id="icoMenu" onclick="controlaBoto()">☰</button>
  </div>
    <!--Fi menu superior-->
    <div class="ptext">
      <span class="border">
        Benvingut a Mayers
      </span>
    </div>
  </div>

  <section id="serveis" class="section section-light">
    <h2>Els millors pastissos</h2>
    <p>
      Si hi ha alguna cosa que ens identifica i que ens dóna la nostra identitat són els pastissos de celebració.
      Per a això combinem les diferents tècniques pastisseres per aconseguir sorprendre, emocionar i crear moments únics i irrepetibles.
    </p>
  </section>

  <div class="pimg2">
    <div class="ptext">
      <span class="border trans">
        La millor reposteria
      </span>
    </div>
  </div>

  <section class="section section-dark">
    <h2>Una mica més</h2>
    <p>
      Disposem d'una àmplia varietat de productes entre els quals pots trobar: Pastissos, pastissets,
      pastisseria, pastes, bomboneria, canapès, salats, especialitats per a cerimònies ...
    </p>
  </section>

  <div class="pimg3">
    <div class="ptext">
      <span class="border trans">
        No t'ho perdis
      </span>
    </div>
  </div>

  <section id="nosaltres" class="section section-dark">
    <h2>Nosaltres</h2>
    <p>
      La Pastisseria Mayers va obrir les seves portes per primera vegada al desembre de 1998, sota la direcció de Josep Maria Camós i la seva dona Maria Montserrat.
      El 2000, van obrir la seva actual i ara única botiga situada a Girona. Carrer Nou, reformada i ampliada al novembre de 2010.
    </p>
  </section>

  <div class="pimg1">
    <div class="ptext">
      <span class="border">
        Contacta
      </span>
    </div>
  </div>
  <section id="contacta" class="section section-dark">
    <div class="container">
      <form action="/action_page.php">
        <label for="fname">Nom</label>
        <input type="text" id="fname" name="firstname" placeholder="Nom..">

        <label for="lname">Cognom</label>
        <input type="text" id="lname" name="lastname" placeholder="Cognom..">

        <label for="country">Pais</label>
        <select id="country" name="Pais">
          <option value="australia">Espanya</option>
          <option value="canada">Regne Unit</option>
          <option value="usa">Estats Units</option>
        </select>

        <label for="subject">Missatge</label>
        <textarea id="subject" name="subject" placeholder="Escriu el teu missatge.." style="height:200px"></textarea>

        <input type="submit" value="Envia">
      </form>
  </div>
  <footer> Pau Camós Parra</footer>
  </section>
</body>
</html>
