<?php
$error=''; //Variable per a guardar el missatge d'error;
if(isset($_POST['submit'])){
 if(empty($_POST['username']) || empty($_POST['password'])){
   $error = "Usuari o contrasenya incorrectes.";
 }
 else
 {
 //Definim $username i $password
 $user=$_POST['username'];
 $pass=$_POST['password'];
 include('conexio.php');
 //query per buscar les dades y fer un fetch
 $query = mysqli_query($conn, "SELECT * FROM usuaris WHERE contrasenya='$pass' AND usuari='$user'");

 $rows = mysqli_num_rows($query);
 if($rows == 1){
   header("Location: crm.php"); // redirecció si el login es correcte
 }
 else
 {
   $error = "Usuari o contrasenya invalids.";
   echo $error;

 }
 mysqli_close($conn); // tanquem conexio
 }
}

?>
