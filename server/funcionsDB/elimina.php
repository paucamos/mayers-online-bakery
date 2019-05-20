<?php
include('../conexio.php');

$sql = "DELETE FROM productes WHERE id={$_POST['id']}";

$result = mysqli_query($conn, $sql);
echo $_POST['id'];



//$db->close();
