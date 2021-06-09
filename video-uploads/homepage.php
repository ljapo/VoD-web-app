<?php
session_start();

 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Jumbo-Homepage</title>
  <link rel="stylesheet" href="homepage.css" type="text/css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
  <body style='background-image:linear-gradient(rgba(0, 0, 0, 0.7), rgba(0,0,0,0.7)), url(images/back.jpg);background-color:transparent !important;'>
    <header>

        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <a href="#" class="navbar-brand"> <img src="images/logo.png" alt=""> </a>
            <span class="navbar-text">Jumbo</span>

            <ul class="navbar-nav">
              <?php
              if (isset($_SESSION['id'])) {
                if ($_SESSION['id'] == 1) {
                  echo "<li class='nav-item'> <a href='admin.php' class='nav-link'>Dodaj film</a> </li>";
 		  echo "<li class='nav-item'> <a href='listofusers.php' class='nav-link'>Lista korisnika</a> </li>";
		  echo "<li class='nav-item'> <a href='listofmovies.php' class='nav-link'>Lista filmova</a> </li>";
		  echo "<li class='nav-item'> <a href='listofrecommend.php' class='nav-link'>Lista prijedloga</a> </li>";
		  echo "<li class='nav-item'> <a href='listofcontactus.php' class='nav-link'>Lista prijava</a> </li>";
                }
              }
              echo "<li class='nav-item'> <a href='account.php' class='nav-link'>Račun</a> </li>";
if ($_SESSION['id'] != 1) {
		echo   "<li class='nav-item'> <a href='recommend.php' class='nav-link'>Prijedlog filma</a> </li>";
	       echo   "<li class='nav-item'> <a href='contactus.php' class='nav-link'>Kontakt</a> </li>";
}
              echo   " <li class='nav-item'> <a href='logout.php' class='nav-link'>Odjavi me</a> </li>
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

              echo"<h1 style='color:#D5D5D5;position:sticky;'>Dobrodošli </h1><b style = 'color: #D5D5D5;font-size: 25px'><i> ".ucwords($rel['name'])." !</i></b>
                  </div>
                  </header>
                  <section>


                <div class='jumbotron' style='background: #363636;margin-bottom:2px;margin-top:2px'>
                <div class='row'>
                  <div class='col'>
                    <form action='movie.php' method='POST'>
                    <h4 style='color:#D5D5D5;font-size:30px;'>Nedavno:
                    <input type='submit' name='submit' class='btn btn-success' style='display:inline;width:200px;margin-left:20px;margin-right:20px; -webkit-filter: drop-shadow(5px 5px 5px #222);
                    filter: drop-shadow(5px 5px 5px #222);' value='".ucwords($rel2['name'])."'/></h4>
                    </form>
                  </div>
                  <div class='col'>
                    <form action='search.php' method='POST'>
                      <select  name='option' style='padding:5px;'>
                        <option selected>Traži</option>
                        <option value='name'>Po imenu</option>
                        <option value='genre'>Po žanru</option>
                        <option value='rdate'>Po godini</option>
                      </select>
                      <input type='text' placeholder='Unesi...' style='margin-left:10px;margin-top:10px;padding:5px;' name='textoption'>

                      <input type='submit' name='submit' class='btn btn-success' style='display:inline;width:100px;margin-left:20px;margin-right:20px;margin-bottom:7px; -webkit-filter: drop-shadow(5px 5px 5px #222);
                      filter: drop-shadow(5px 5px 5px #222);' value='Traži'/></h4>
                    </form>
                  </div>
                </div>
                </div>";
                  ?>
      <div class="jumbotron" style='margin-bottom:2px;margin-top:2px'>
        <h2 style='margin-top:1px;margin-bottom:2px;padding-top:0px;color:#D5D5D5'>Zadnje dodano</h2>
          <div class="row">
            <?php
              include 'latest-fetcher.php';
             ?>
          </div>
      </div>
      <div class="jumbotron" style='margin-bottom:2px'>
        <h2 style='margin-top:1px;padding-top:0px;color:#D5D5D5'>Svi filmovi</h2>
          <?php
            include 'fetcher.php';
            ?>


      </div>

  </section>
  <footer class="page-footer font-small blue">

    <div class="footer-copyright text-center py-1"> Rađeno u svrhu projektnog zadatka | Fakultet za saobraćaj i komunikacije | Sarajevo 2021. ®
    </div>

  </footer>
  </body>
</html>
