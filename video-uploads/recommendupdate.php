<?php
  session_start();
  include 'dbh.php';

if(isset($_POST['sub'])){

    $nam = strtolower($_POST['prijedlog']);

    $nsql = "INSERT INTO prijedlozi (Prijedlog) VALUES ('$nam')";
    $result = mysqli_query($conn,$nsql);
    header("Location: homepage.php");
   }
?>