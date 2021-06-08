<?php
  session_start();
  include 'dbh.php';

if(isset($_POST['sub'])){

    $nam = strtolower($_POST['fname']);
    $gen =  $_POST['genr'];
    $rid = $_POST['id'];
    $dat = $_POST['date'];
    $time = $_POST['rtime'];

    $nsql = "UPDATE movies SET name= '$nam', genre= '$gen', rdate= '$dat', runtime='$time' WHERE mid='$rid' ";
    $result = mysqli_query($conn,$nsql);
    header("Location: listofmovies.php");
   }
?>