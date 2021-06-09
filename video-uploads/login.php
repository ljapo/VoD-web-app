<?php
session_start();

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Jumbo</title>
    <link rel="stylesheet" href="master.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  <body>
    <header>
      <div class="container-fluid">
        <nav class="navbar shift navbar-expand-sm navbar-dark bg-dark ">
            <a href="login.php" class="navbar-brand"> <img src="images/logo.png" alt=""> </a>
            <span class="navbar-text">Jumbo</span>

            <ul class="navbar-nav" data-aos="fade-down">
              <li class="nav-item" data-aos="fade-down"> <a href="#A" class="nav-link" data-aos="fade-down"> Servisi</a> </li>
              <li class="nav-item"> <a href="user-login.php" class="nav-link">Prijavite se</a> </li>

            </ul>

        </nav>

        <div class="container">
          <div class="jumbotron">
            <h1 class="lead">Pridruži se zajednici, ostvari pristup gledanju svog najdražeg video sadržaja gdje god poželiš!</h1>
            <hr class="my-4">
            <p>Jednim klikom postani član, i ostvari pravo na gledanje sadržaja.</p>
            <p class="lead">
            <a href="test.php" type="button" class="btn btn-success btn-block">Registrujte se!</a>
          </div>
        </div>
      </div>

      </header>



    <section class="features">
        <a href="#" name="A"></a>
        <h2>Naši servisi</h2>

        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <p class="arrange"><img src="images/mob.png" alt=""> <br> 
              </p>
            </div><div class="col-md-4">
              <p class="arrange"><img src="images/mess.png" alt=""> <br> 
              </p>
            </div>
              <div class="col-md-4">

                <p class="arrange">
                  <img src="images/desktop.jpg"> <br> 
                </p> 
              </div> 
              
            </div>
            
          </div>
          
          <h3></h3>
          
    </section>
    <footer class="page-footer font-small blue">

    <div class="footer-copyright text-center py-1" style="color:white"> Rađeno u svrhu projektnog zadatka | Fakultet za saobraćaj i komunikacije | Sarajevo 2021. ®
    </div>

  </footer>
    
  </body>
</html>
