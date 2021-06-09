<?php
session_start();

 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Jumbo Početna</title>
  <link rel="stylesheet" href="homepage.css" type="text/css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
  <body>
    <header>

        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <a href="homepage.php" class="navbar-brand"> <img src="images/logo.png" alt=""> </a>
            <span class="navbar-text">Jumbo</span>

            <ul class="navbar-nav">
              <?php
              if (isset($_SESSION['id'])) {
                if ($_SESSION['id'] == 1) {
                  echo "<li class='nav-item'> <a href='admin.php' class='nav-link'>Dodaj film</a> </li>";
	          echo "<li class='nav-item'> <a href='listofusers.php' class='nav-link'>Lista korisnika</a> </li>";
		  echo "<li class='nav-item'> <a href='listofmovies.php' class='nav-link'>Lista filmova</a> </li>";
                }
              }
              echo"<li class='nav-item'> <a href='account.php' class='nav-link'>Račun</a> </li>

                  <li class='nav-item'> <a href='logout.php' class='nav-link'>Odjavi me</a> </li>
                  </ul>
                  </nav>
                  <div class='container-fluid'>
                  <br><br><br>";
                  include 'dbh.php';
                  $id = $_SESSION['id'];
                  $quer = "SELECT * FROM user1 WHERE id = '$id' ";
                  $quer2 = "SELECT * FROM movies WHERE mid in (SELECT mid from user1 where id = '$id') ";
                  $check = mysqli_query($conn,$quer);
                  $rel = mysqli_fetch_assoc($check);
                  $check2 = mysqli_query($conn,$quer2);
                  $rel2 = mysqli_fetch_assoc($check2);

              echo"<h1 style = 'color: #d5d5d5;position:sticky;'>Dobrodošli </h1><i style = 'color: #d5d5d5;font-size: 25px'> ".ucwords($rel['name'])." !</i>
                  </div>
                  </header>
                  <section>


                <div class='jumbotron' style='margin-bottom:5px;margin-top:5px'>
                <div class='row'>
                  <div class='col'>
                    <form action='movie.php' method='POST'>
                    <h4 style='color:black;font-size:30px;color: #d5d5d5;'>Zadnje gledano :
                    <input type='submit' name='submit' class='btn btn-success' style='display:inline;width:200px;margin-left:20px;margin-right:20px; -webkit-filter: drop-shadow(5px 5px 5px #222);
                    filter: drop-shadow(5px 5px 5px #222);' value='".ucwords($rel2['name'])."'/></h4>
                    </form>
                  </div>
                  <div class='col'>
                    <form action='search.php' method='POST'>
                      <select  name='option' style='padding:5px;'>
                        <option selected>Traži</option>
                        <option value='1'>Po imenu</option>
                        <option value='2'>Po žanru</option>
                        <option value='3'>Po godini</option>
                      </select>
                      <input type='text' placeholder='Unesi..' name='textoption' style='margin-left:10px;margin-top:10px;padding:5px;'>

                      <input type='submit' name='submit' class='btn btn-success' style='display:inline;width:100px;margin-left:20px;margin-right:20px;margin-top:1px;margin-bottom:7px; -webkit-filter: drop-shadow(5px 5px 5px #222);
                      filter: drop-shadow(5px 5px 5px #222);' value='Search'/></h4>
                    </form>
                  </div>
                </div>
                </div>";
                  ?>
      <div class="jumbotron" style='margin-bottom:1px'>
        <h2 style='margin-top:0px;padding-top:0px;color: #d5d5d5;'>Rezultat : </h2>

            <?php
            include 'searchback.php';
            ?>

      </div>


  </section>
  <footer class="page-footer font-small blue">

    <div class="footer-copyright text-center py-1">Rađeno u svrhu projektnog zadatka | Fakultet za saobraćaj i komunikacije | Sarajevo 2021. ®
    </div>

  </footer>
  </body>
</html>
