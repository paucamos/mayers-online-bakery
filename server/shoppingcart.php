<?php
include('conexio.php');
$sql = "INSERT INTO carro (id_producte) VALUES (8)";
$result = mysqli_query($conn, $sql);
