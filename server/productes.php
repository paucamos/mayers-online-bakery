<?php


$sql = "SELECT nom, descripcio, preu FROM productes";
$result = mysqli_query($conn, $sql); // First parameter is just return of "mysqli_connect()" function
echo "<br>";
echo "<div class='taulaProductes' >";
$contador = 0;
$numImg = 1;
while ($row = mysqli_fetch_assoc($result)) { // Important line !!! Check summary get row on array ..
    echo "<div class='producte' >";
    foreach ($row as $field => $value) { // I you want you can right this line like this: foreach($row as $value) {
        echo  "<div id='objeto".$contador ++."' class='propiedades' >" . $value . "</div>" ; // I just did not use "htmlspecialchars()" function.
    }
    echo  "<img class='fotoProducte' src='../img/img".$numImg.".jpg'>";
    $numImg ++;
    $contador = 0;
    echo "</div>";
}
echo "</div>";
