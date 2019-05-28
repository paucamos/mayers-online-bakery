<?php
include('conexio.php');

$sql = "SELECT id_producte, nom, preu FROM productes RIGHT JOIN carro ON id = id_producte";
$result = mysqli_query($conn, $sql);
$preuTotal = 0;
echo "<h4 id='titolLlista' > Llista de la compra: </h4>";
echo "<table class='carroDisplayed' id='elementsCarro'>";
while ($row = mysqli_fetch_assoc($result)) {
    $idProd = $row['id_producte'];
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
echo "<div id='compraProd'><span class='textCompra'>Compra</span></div>";
