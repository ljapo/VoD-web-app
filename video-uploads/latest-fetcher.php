<?php
include 'dbh.php';


  $im = "SELECT * FROM movies" ;
  $records = mysqli_query($conn,$im);
  $count = mysqli_num_rows($records);


  $i=$count;
  $j=$count-3;
  $newim = "SELECT * FROM movies WHERE mid BETWEEN '$j' AND '$i'" ;
  $newrecords = mysqli_query($conn,$newim);
    while($fetchr = mysqli_fetch_assoc($newrecords)){

      echo"<form action='movie.php' method='POST'>";
      echo"<div class='col'>";
      echo "<img src='uploads/".$fetchr['imgpath']."' class='rounded-corners' height='250' width='200' style='margin-bottom:10px ; margin-top: 30px;margin-left:50px;margin-right:20px;margin-top:8px' />";
        echo"<div class='noob'>";
          echo "<input type='submit' name='submit' class='btn btn-dark' style='display:block;width:200px;padding-bottom:15px;margin-bottom:30px;margin-left:50px;margin-right:20px;margin-top:8px -webkit-filter: drop-shadow(5px 5px 5px #222);
          filter: drop-shadow(5px 5px 5px #222);' value='".ucwords($fetchr['name'])."'/>";
        echo"</div>";
      echo"</div>";
      echo"</form>";


    }

    ?>
