<?php
include('conexio.php');
$id = $_GET["id"];
$sql = "INSERT INTO carro (id_producte) VALUES ($id)";
$result = mysqli_query($conn, $sql);
