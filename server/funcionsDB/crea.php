<?php
include('../conexio.php');
$sql = "INSERT INTO productes (id, nom, descripcio, preu)
        VALUES ('".$_POST["id"]."','".$_POST["nom"]."','".$_POST["descripcio"]."','".$_POST["preu"]."')";
$result = mysqli_query($conn, $sql);
echo '{"producte": "pastis-s'.$_POST["nom"].'"}';
//$db->close();
