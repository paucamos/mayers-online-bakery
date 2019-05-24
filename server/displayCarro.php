<?php
include('conexio.php');

$sql = "SELECT nom, preu FROM productes RIGHT JOIN carro ON id = id_producte";
$result = mysqli_query($conn, $sql);
$preuTotal = 0;
echo "<table border=1 class='carroDisplayed'>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>".$row["nom"]. "</td>";
    echo "<td>".$row["preu"]."€</td>";
    echo "</tr>";

    $preuTotal += $row["preu"];
}
echo "<td>Total:</td>";
echo "<td>".$preuTotal."€ </td>";
echo "</table>";
// TODO: Editar boton compra
echo "<button>Compra</button>";
