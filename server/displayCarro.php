<?php
include('conexio.php');

$sql = "SELECT id, nom, preu
FROM productes
INNER JOIN carro
ON productes.id = carro.id_producte
INNER JOIN usuaris u
ON carro.id_usuari = $loginId
GROUP BY id";

$result = mysqli_query($conn, $sql);
$preuTotal = 0;
echo "<h4 id='titolLlista' > Llista de la compra: </h4>";
echo "<table class='carroDisplayed' id='elementsCarro'>";
while ($row = mysqli_fetch_assoc($result)) {
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
// TODO: Editar boton compra
echo "<a href='checkout.php' > <div id='compraProd'><span class='textCompra'>Compra</span></div> </a>";
