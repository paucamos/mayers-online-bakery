<?php session_start(); ?>
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
  <script src="js/scripts.js"></script>
  <link rel="icon" type=”image/png” href=”img/favicon.png/>
</head>
<body>
  <div class="pimg1">
    <button onclick="topFunction()" id="myBtn" title="amunt">▲</button>
    <!--Menu superior-->
  <div id="mySidebar" class="sidebar">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <a href="#nosaltres">Qui som</a>
    <a href="#serveis">Serveis</a>
    <?php // TODO: Acabar el if session pagina diferent?>
    <?php
    if (session_id() == '' || !isset($_SESSION)) {
        // session isn't started
        session_start();
        echo '<a href="./server/botiga.php">Botiga</a>';
    } else {
        echo '<a href="./server/botiga.php">Botiga</a>';
    }
     ?>
    <a href="#contacta">Contacta</a>
  </div>
  <div id="main">
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
