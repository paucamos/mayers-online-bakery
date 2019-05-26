<?php
include('conexio.php');
$id = $_GET["id"];
$sql = "INSERT INTO carro (id_producte) VALUES ($id)";
$result = mysqli_query($conn, $sql);

$sql2 = "SELECT id_producte, nom, preu FROM productes RIGHT JOIN carro ON id = id_producte";
$result2 = mysqli_query($conn, $sql2);
$preuTotal = 0;
echo "<h4> Llista de la compra: </h4>";
echo "<table border=1 class='carroDisplayed' id='elementsCarro'>";
while ($row = mysqli_fetch_assoc($result2)) {
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
echo "<button>Compra</button>";
