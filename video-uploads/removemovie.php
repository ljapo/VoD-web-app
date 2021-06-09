<?php

  session_start();
  include 'dbh.php';

    // sql to delete a record
    $sql = "DELETE FROM movies WHERE mid='".$_GET['mid']."' ";

    if ($conn->query($sql) === TRUE) {
       header("Location: listofmovies.php");
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();

?>