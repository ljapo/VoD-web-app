<?php
session_start();
if (isset($_POST['submit'])) {

  $title = $_POST['submit'];

  include 'dbh.php';
  $im = "SELECT * FROM movies WHERE name = '$title'" ;

  $records = mysqli_query($conn,$im);

  echo"<!DOCTYPE html>";
  echo"<html lang='en' dir='ltr'>";
    echo"<head>";
      echo"<meta charset='utf-8'>";
      echo"<title>".$title."</title>";
      echo"<link rel='stylesheet' href='movie.css'>";
      echo"<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' integrity='sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO' crossorigin='anonymous'>";
    echo"</head>";
    echo"<body>";

        
        
        while($result = mysqli_fetch_assoc($records)){
            $mname = $result['name'];
            $person = $_SESSION['id'];
            $movieid = $result['mid'];
            $current = $result['viewers'];
            $newcount = $current + 1;
            $newsql = "UPDATE movies SET viewers = '$newcount' WHERE name='$mname' ";
            $nsql = "UPDATE user1 SET mid = '$movieid'";
            $updatecount = mysqli_query($conn,$newsql);
            $updatecount = mysqli_query($conn,$nsql);

            $picture="uploads/".$result['imgpath'];

            $url ="video-uploads/".$result['videopath'];
           
            echo'<div class="picture" style="background-image:linear-gradient(to bottom, rgba(18, 18, 20, 0.52), rgba(0, 0, 0, 0.73)), url(\''.$picture.'\')"div>';
            echo"<br>";
            echo"<div class='container'>";
            echo"<br>";
            echo"<a href='homepage.php' id='button' class='btn btn-primary btn-lg active' role='button' aria-pressed='true'>Vrati se nazad </a>";
            
          
          echo "<br><br><h5 id='text' style='display: inline;'><br>Naziv: </h5><h2 id='base' style='display: inline;'>".ucwords($result['name'])."<img id='picture' class='rounded-corners' src='uploads/".$result['imgpath']."' height='250' width='200' style='float:right;margin-left:30px;margin-right:20px;margin-bottom:50px;' />"."</h1>";
          echo"<br><h5 id='text' style='display: inline;' >Žanr: </h5><h4 id='base' style='display: inline;'>".ucwords($result['genre'])."</h4>";
          echo"<br><h5 id='text' style='display: inline;' >Godina: </h5><h4 id='base' style='display: inline;'>".$result['rdate']."</h4>";
          echo"<br><h5 id='text' style='display: inline;' >Kratki opis: </h5><h4 id='base' style='clear: left; display: inline;'>".ucfirst($result['decription'])."</h4>";
          echo"<br><h5 id='text' style='display: inline;' >Trajanje: </h5><h4 id='base' style='display: inline;'>".$result['runtime']." mins </h4>";
          echo "<br>";
          echo"<br><h5 id='text' style='display: inline;' >Broj pregleda: </h5><h4 id='base' style='display: inline;'>".$result['viewers']."</h4>";

          echo"<br><br><br>";
          echo"<div class='embed-responsive embed-responsive-16by9'>";   
          echo '<video controls="controls" class="embed-responsive-item">
          <source src="'.$url.'" type="video/mp4"> 
          Your browser does not support the HTML5 Video element.
          </video>
          '; 
          echo"</div>";

        }
       
        echo"</div>";
        echo"</div>";

    echo"</body>";


  echo"</html>";


}
?>
