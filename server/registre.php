<?php
if (isset($_POST['registre'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $error = "Usuari o contrasenya incorrectes.";
    } else {
        //Definim $username i $password
        $user=$_POST['username'];
        $pass=$_POST['password'];        
        include('conexio.php');

        $registre = "INSERT INTO usuaris (usuari, contrasenya) VALUES ('$user', '$pass')";

        $queryResult = mysqli_query($conn, $registre);

        if ($queryResult == 1) {
            $_SESSION['usuari'] = $user;
            $query = mysqli_query($conn, "SELECT * FROM usuaris WHERE contrasenya='$pass' AND usuari='$user'"); //login directe

            $rows = mysqli_num_rows($query);
            header("Location: botiga.php"); // redirecció si el registre es correcte
        } else {
            $error = "Usuari o contrasenya invalids.";
            echo $error;
        }
        mysqli_close($conn); // tanquem conexio
    }
}