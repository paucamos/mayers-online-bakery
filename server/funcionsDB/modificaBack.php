<?php

include("../conexio.php");
$id = $_POST["id"];
$nom = $_POST["nom"];
$desc = $_POST["descripcio"];
$preu = $_POST["preu"];

$sql = "UPDATE productes SET nom = '$nom' , descripcio = '$desc', preu = '$preu' WHERE id = '$id'";

if (mysqli_query($conn,$sql)) {
  echo "Article modificat correctament!";
} else {
  echo mysql_error();
}
?>
