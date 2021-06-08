<?php
session_start();

 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
 <head>
   <meta charset="utf-8">
   <title>Jumbo-Račun</title>
   <link rel="stylesheet" href="homepage.css" type="text/css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 </head>
   <body style='background-image:linear-gradient(rgba(0, 0, 0, 0.7), rgba(0,0,0,0.7)), url(images/back.jpg); background-color:transparent !important;'>
     <header>

         <nav class="navbar navbar-expand-md navbar-dark bg-dark">
             <a href="homepage.php" class="navbar-brand"> <img src="images/logo.png" alt=""> </a>
             <span class="navbar-text">Jumbo</span>

             <ul class="navbar-nav">

               <li class="nav-item"> <a href="homepage.php" class="nav-link">Početna</a> </li>

               <li class="log-o nav-item"> <a href="logout.php" class="nav-link">Odjavi me</a> </li>
             </ul>


         </nav>

      </header>

      <div class="jumbotron" style="color: #363636;margin-top:3px;margin-bottom:3px">
        <?php
              include 'dbh.php';
              $id = $_SESSION['id'];
              $sql = "SELECT * FROM user1 WHERE id = $id ";
              $newrecords = mysqli_query($conn,$sql);
              $result = mysqli_fetch_assoc($newrecords);

      echo"  <form  action='update.php' method='POST'>

          <h4 style='color: #d5d5d5;'>Vaši podaci</h4>
          <br>
          <input type='text' class='form-control' placeholder='Unesite puno ime' name='fname' value='".ucwords($result['name'])."'>
          <br>
          <input type='text' class='form-control' placeholder='Unesite broj telefona' name='phn' value='".$result['phone']."'>
          <br>
          <label style='color: #d5d5d5;'><b>Datum rođenja : </b></label>
          <input type='text' class='from-control' placeholder='Unesite datum rođenja' name='dob' value='".$result['DOB']."'><br>
          <br>
          <a href='accountp.php'>Promjena lozinke</a>
              <div class='signupbutton'>
                <br>
                <button type='submit' class='btn btn-success' name='sub' value='submit' style=' -webkit-filter: drop-shadow(5px 5px 5px #222);
                filter: drop-shadow(5px 5px 5px #222);'>Ažuriraj podatke</button>

              </div>
              </form>


              
              <label><b>Email adresa: </b>".$result['email']."</label>
              <br><br>
              



              ";
         ?>




      </div>
      <footer class="page-footer font-small blue">

<div class="footer-copyright text-center py-1" style=" position:absolute;
  left:0;
  right:0;
  bottom:0;
  height:30px;color:white;background:black;"> Rađeno u svrhu projektnog zadatka | Fakultet za saobraćaj i komunikacije | Sarajevo 2021. ®
</div>

</footer>
    </body>

  </html>
