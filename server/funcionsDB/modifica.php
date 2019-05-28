<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Botiga Online</title>
  <link rel="stylesheet" href="../../css/style.css">
  <link rel="stylesheet" type="text/css" href="../../css/estils.css">
  <link rel="stylesheet" href="../../css/estilsMenu.css">
  <link rel="stylesheet" href="../../css/estilsContacta.css">
  <link rel="stylesheet" href="../../css/scroll.css">
  <link rel="stylesheet" href="../../css/estilLogin.css">
  <link rel="stylesheet" href="../../css/estilsCrm.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <script src="../js/jquery-3.4.1.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="../../js/scripts.js"></script>
</head>
  <body>
        <?php
          include('../login.php'); // Conexio
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
          <a href="../../index.php">Inici</a>
          <a href="../botiga.php">Botiga</a>
          <a href="../crm.php">CRM</a>
        </div>
        <div id="main">
          <button class="openbtn" id="icoMenu" onclick="controlaBoto()">☰</button>
        </div>
          <!--Fi menu superior-->
          <div class="panell" id="panellCrm">
            <div id='message'></div>
            <h2>Modifica un article: </h2>
            <div class="panellModifica">
              <form class="" method="post">
                <table>
                  <tr>
                    <th>Id Producte: </th>
                    <td>
                      <input type="text" value="<?= $_GET['id']; ?>" name="id" readonly="readonly">
                    </td>
                  </tr>
                  <tr>
                    <th>Nom Producte: </th>
                    <td>
                      <input type="text" value="<?= $_GET['nom']; ?>" name="nom">
                    </td>
                  </tr>
                  <tr>
                    <th>Descripcio Producte: </th>
                    <td>
                      <input type="text" value="<?= $_GET['descripcio']; ?>" name="descripcio">
                    </td>
                  </tr>
                  <tr>
                    <th>Preu Producte: </th>
                    <td>
                      <input type="text" value="<?= $_GET['preu']; ?>" name="preu">
                    </td>
                  </tr>
                  <tr>
                    <td colspan="2" align="center">
                      <input id="actualitza" type="submit" name="actualitza" value="Actualitza">
                      <a href="../crm.php" id="tornaEnrera" type="button" name="torna" > Torna a la LLista </a>
                    </td>
                  </tr>
                </table>
              </form>
            </div>
          </div>
  </body>
</html>
