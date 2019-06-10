<?php
include('../conexio.php');
$sql = "INSERT INTO productes (id, nom, descripcio, preu, img)
        VALUES ('".$_POST["id"]."','".$_POST["nom"]."','".$_POST["descripcio"]."','".$_POST["preu"]."','".$_POST["img"]."')";
$result = mysqli_query($conn, $sql);

echo '{
        "id": "'.$_POST['id'].'",
        "nom": "'.$_POST['nom'].'",
        "descripcio": "'.$_POST['descripcio'].'",
        "preu": "'.$_POST['preu'].'"
      }';


//$db->close();
