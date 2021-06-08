<?php
  session_start();
  include 'dbh.php';

if(isset($_POST['sub'])){

    $nam = strtolower($_POST['name']);
    $mail =  $_POST['email'];
    $msg =  $_POST['poruka'];

    $nsql = "INSERT INTO kontakt (ime, email, poruka) VALUES ('$nam', '$mail', '$msg')";
    $result = mysqli_query($conn,$nsql);
    header("Location: homepage.php");
   }
?>