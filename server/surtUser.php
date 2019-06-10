<?php

session_start();
include('session.php');
$sql = "DELETE FROM carro WHERE id_usuari = $loginId";

$result = mysqli_query($conn, $sql);
if(session_destroy()) {
    header('Location: ../index.php');
    include('conexio.php');
}