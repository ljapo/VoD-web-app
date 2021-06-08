<?php
session_start();

 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
 <head>
   <meta charset="utf-8">
   <title>Jumbo Račun</title>
   <link rel="stylesheet" href="homepage.css" type="text/css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 </head>
   <body style=' background-color:transparent !important;'>
     <header>

         <nav class="navbar navbar-expand-md navbar-dark bg-dark">
             <a href="homepage.php" class="navbar-brand"> <img src="images/logo.png" alt=""> </a>
             <span class="navbar-text">Jumbo</span>

             <ul class="navbar-nav">

               <li class="nav-item"> <a href="homepage.php" class="nav-link">Početna</a> </li>

               <li class="nav-item"> <a href="logout.php" class="nav-link">Odjavi me</a> </li>
             </ul>

         </nav>

      </header>

      <div class="jumbotron" style='margin-bottom:3px;margin-top:3px;background: #363636;'>
<form  action='contactusupdate.php' onsubmit="alert('Hvala na saradnji. Javit ćemo Vam se u najkraćem roku. :)');" method='POST'>
<div class="form-group">
  <h4 style='color: #d5d5d5;'>Ostavite nam poruku, pomozite da skupa unaprijedimo naše usluge.</h4>
<br>
		<label style='color: #d5d5d5;'>Ime: </label>
                 <input class="form-control" type="text" name="name" value="">
		</div>
		<div class="form-group">
		<label style='color: #d5d5d5;'>Email: </label>
                 <input class="form-control" type="text" name="email" value="">
		</div>
		<div class="form-group">
		<label style='color: #d5d5d5;'>Poruka: </label>
                 <textarea class="form-control" name="poruka" value""></textarea>
		</div>

 <div class='signupbutton'>
                <br><br>
                <button type='submit' class='btn btn-success' name='sub' value='submit'>Pošalji</button>
              </div>
              </form>
      </div>
     

    </body>
    <footer class="page-footer font-small blue">

<div class="footer-copyright text-center py-1" style=" position:absolute;
  left:0;
  right:0;
  bottom:0;
  height:30px;color:white;background:black;"> Rađeno u svrhu projektnog zadatka | Fakultet za saobraćaj i komunikacije | Sarajevo 2021. ®
</div>

</footer>
  </html>

		
          