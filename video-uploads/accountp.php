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

      <div class="container">
        <?php
              include 'dbh.php';
              $id = $_SESSION['id'];
              $sql = "SELECT * FROM user1 WHERE id = $id ";
              $newrecords = mysqli_query($conn,$sql);
              $result = mysqli_fetch_assoc($newrecords);

      echo"  <form  action='update.php' method='POST'>

          <br><br><input type='text' class='form-control' placeholder='Unesite puno ime i prezime' name='fname' value='".ucwords($result['name'])."'>
          <br>
          <input type='text' class='form-control' placeholder='Unesite broj telefona' name='phn' value='".$result['phone']."'>
          <br>
          <label style='color: #d5d5d5;' ><b>Datum rođenja : </b></label>
          <input type='text' class='from-control' placeholder='Unesite datum rođenja' name='dob' value='".$result['DOB']."'><br>

              <div class='signupbutton'>
                <br><br>
                <button type='submit' class='btn btn-success' name='sub' value='submit' style='display:inline;width:200px;margin-left:20px;margin-right:20px; -webkit-filter: drop-shadow(5px 5px 5px #222);
                filter: drop-shadow(5px 5px 5px #222);'>Ažuriraj podatke</button>

              </div>
              </form>


              <br><br>
              <label style='color: #d5d5d5;'><b>Email adresa: </b>".$result['email']."</label>
              <br><br>
              <form class='' action='updatep.php' method='post'>
                <input type='password' class='form-control' placeholder='Unesite staru lozinku' name='oldp'><br>
                <input type='password' class='form-control' placeholder='Unesite novu lozinku' name='newp'><br>
                <button type='submit' class='btn btn-success ' name='subpass' value='submit' style='display:inline;width:200px;margin-left:20px;margin-right:20px; -webkit-filter: drop-shadow(5px 5px 5px #222);
                filter: drop-shadow(5px 5px 5px #222);'>Ažuriraj lozinku</button><br>


              </form>


              ";
         ?>




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
