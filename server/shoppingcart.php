<?php
include('conexio.php');
include('session.php');
$id = $_GET["id"];
$sql = "INSERT INTO carro ( id_producte, id_usuari) values ($id, $loginId)";

$result = mysqli_query($conn, $sql);

$sql2 = "SELECT id, nom, preu
FROM productes
INNER JOIN carro
ON productes.id = carro.id_producte
INNER JOIN usuaris u
ON carro.id_usuari = $loginId
GROUP BY id";

$result2 = mysqli_query($conn, $sql2);
$preuTotal = 0;
echo "<h4> Llista de la compra: </h4>";
echo "<table border=1 class='carroDisplayed' id='elementsCarro'>";
while ($row = mysqli_fetch_assoc($result2)) {
    $idProd = $row['id'];
    echo "<tr id='filaCarro{$idProd}' >";
    echo "<td>".$row["nom"]. "</td>";
    echo "<td>".$row["preu"]."€</td>";
    //funcio elimina passant el id
    echo "<td id='elimina' onclick='eliminaCarro(".$idProd.")'>
              <i class='fas fa-trash-alt'></i>
          </td>";
    echo "</tr>";

    $preuTotal += $row["preu"];
}
echo "<td>Total:</td>";
echo "<td id='preuTotal'>{$preuTotal}€</td>";
echo "</table>";
echo "<a href='checkout.php' > <div id='compraProd'><span class='textCompra'>Compra</span></div> </a>";