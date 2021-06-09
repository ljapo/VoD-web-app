<?php
include 'dbh.php';


  $im = "SELECT * FROM movies ORDER BY name ASC" ;
  $records = mysqli_query($conn,$im);

  start:
  $i=0;

  echo"<div class='row'>";
    while($result = mysqli_fetch_assoc($records)){
      echo"<form action='movie.php' method='POST'>";
      echo"<div class='col'>";
      echo "<img src='uploads/".$result['imgpath']."' height='250' width='200' class='rounded-corners' style='margin-bottom:12px ; margin-top: 30px;margin-left:30px;margin-right:20px;margin-top:8px' />";
        echo"<div class='noob'>";
          echo "<input type='submit' name='submit' class='btn btn-dark' style='display:block;width:200px;padding-bottom:15px;margin-bottom:30px;margin-left:30px;margin-right:20px;margin-top:8px -webkit-filter: drop-shadow(5px 5px 5px #222);
          filter: drop-shadow(5px 5px 5px #222);' value='".ucwords($result['name'])."'/>";
        echo"</div>";
      echo"</div>";
      echo"</form>";

      if ($i==4) {

        echo"</div>";

        goto start;
      }
      $i++;
    }
    echo"</div>";
    ?>
