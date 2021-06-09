<?php
  session_start();
  include 'dbh.php';




    $username =  $_POST['mail'];
    $password =  $_POST['pass'];



    $sql = "SELECT * FROM user1 WHERE username = '$username' AND passwd = '$password' ";

    $result = $conn->query($sql);

    if(!$row = $result->fetch_assoc()) {
header("Location: user-login.php?error=1");
    }else {

        $_SESSION['id'] = $row['id'];
        header("Location: homepage.php");
      }

    

?>
