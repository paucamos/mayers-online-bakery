<?php


$sql = "SELECT * FROM productes ORDER BY id ASC";
$result = mysqli_query($conn, $sql); // First parameter is just return of "mysqli_connect()" function
echo "<br>";
echo "<div class='taulaProductes' >";
$contador = 0;
$numImg = 1;
while ($row = mysqli_fetch_assoc($result)) { // Important line !!! Check summary get row on array ..
  //echo '<form method="post" class="formulariP" action="botiga.php?action=add&id='. $row["id"] .'">';
    $numImg = $row["id"];
    echo '<div class="info">';
    if ($numImg == $row["id"]) {
      echo  "<img class='fotoProducte' src='../img/".$numImg.".jpg'>";
    }
    echo $numImg;
    $numImg ++;
      echo '<div class="caption">';
        echo '<div class="content">';
              echo "<h4 style='display: none;' class='propiedades'>".$row["id"]."</h4>";
              echo "<h4 id='nomProd' class='propiedades'>".$row["nom"]."</h4>";
              echo "<h4 id='descProd' class='propiedades'>".$row["descripcio"]."</h4>";
              echo "<h4 id='preuProd' class='propiedades'>".$row["preu"]."€</h4>";
              echo "<div id='afegeixProd' onclick='afegeix(".$row["id"].")' > <span class='textBoto'> Afegeix al carro </span></div>";
        echo '</div>';
        //onclick="afegeix('.$row["id"].')"
      echo '</div>';
    echo '</div>';
  echo "</form>";
  $contador = 0;
}
echo "</div>";
