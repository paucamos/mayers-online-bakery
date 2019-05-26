<?php
include('../conexio.php');

$sql = "DELETE FROM carro WHERE id_producte={$_POST['idProducte']}";
$sqlpreu = "SELECT preu from productes RIGHT JOIN carro ON id = id_producte";

$result = mysqli_query($conn, $sql);
$result2 = mysqli_query($conn, $sqlpreu);

$preuTotal = 0;

while ($r = mysqli_fetch_assoc($result2)) {
    $preuTotal += $r["preu"];
}
echo $preuTotal;




//$db->close();
