
<?php
session_start();

 ?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Jumbo-Login</title>
    <link rel="stylesheet" href="user-login.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  </head>
  <body>
    <header>
      <div class="container-fluid">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <a href="login.php" class="navbar-brand"> <img src="images/logo.png" alt=""> </a>
            <span class="navbar-text">Jumbo</span>

            <ul class="navbar-nav">
              <li class="nav-item"> <a href="test.php" class="nav-link">Nemate račun? Registirajte se ovdje.</a> </li>

            </ul>

        </nav>

        <div class="container">

          <div class="jumbotron">
            <h1>Prijavite se na svoj račun</h1> <br>

<?php
if(isset($_GET['error'])==true){
echo '<span style="font-weight:bold;color:#FF0000;text-align:center;">Korisničko ime i šifra nisu tačni!</span>';
}
?>

            <form class="" action="Plogin.php" method="POST"> <br><br>
              <input type="email" class="form-control" placeholder="Korisničko ime/Email" name="mail" value="">
              <br>
              <input type="password" class="form-control" placeholder="Lozinka" name="pass" value="">
              <br><br>

              <div class="loginbutton">
                <button type="submit" class="btn btn-success btn-lg" name="login">Prijava</button>

              </div>
              </form>

              </div>


          </div>
        </div>
        <footer class="page-footer font-small blue">

    <div class="footer-copyright text-center py-1" style="color:white"> Rađeno u svrhu projektnog zadatka | Fakultet za saobraćaj i komunikacije | Sarajevo 2021. ®
    </div>

  </footer>

  </header>
  
  </body>

</html>
