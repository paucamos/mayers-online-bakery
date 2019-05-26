<?php
  $to = "paucamos98@gmail.com";
  $subject = $_POST['subject'];
  $missatge = $_POST['missatge'];
  $headers = "From: paucamos98@gmail.com";

  if (mail($to, $subject, $missatge, $headers)) {
    header("Location: ../index.php");
  } else {
    echo "mail incorrecte";
  }
