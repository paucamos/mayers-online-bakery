<?php

include('conexio.php');

session_start();

$user_check = @$_SESSION['usuari'];

$ses_sql = "select usuari from usuaris where usuari = '$user_check'";
$sql = "select id_usuari from usuaris where usuari = '$user_check'";

$result = mysqli_query($conn, $ses_sql);
$result2 = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$row2 = mysqli_fetch_assoc($result2);

$loginId = $row2['id_usuari'];
$login_session = $row['usuari'];

if (!isset($login_session)) {
    mysqli_close($conn);
    
}