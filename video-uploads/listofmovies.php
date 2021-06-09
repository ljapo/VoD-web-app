<?php
session_start();

 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
 <head>
   <meta charset="utf-8">
   <title>Jumbo Račun</title>
   <link rel="stylesheet" href="user.css" type="text/css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 </head>
   <body style='background-image:linear-gradient(rgba(0, 0, 0, 0.7), rgba(0,0,0,0.7)), url(images/back.jpg);background-color:transparent !important;'>
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

      <div class="jumbotron" style='background: #363636;margin-bottom:3px;margin-top:3px'>
<table class="table table-dark">
    <thead>
        <tr>
	    <th>ID</th>
            <th>NAZIV</th>
	    <th>ŽANR</th>
	    <th>GODINA</th>
            <th>TRAJANJE</th>
	    <th style="text-align:center">PREGLEDI</th>
        </tr>
    </thead>
    <tbody>
        <?php
              include 'dbh.php';
              $sql = "SELECT * FROM movies";
              $newrecords = mysqli_query($conn,$sql);

while($result = mysqli_fetch_assoc($newrecords))
  echo " <form  action='updatemovie.php' method='POST'>
     <tr>  
<td>	<input type='text' class='form-control' ' name='id' value='".ucwords($result['mid'])."'>
      <br> </td>
<td>	<input type='text' class='form-control' placeholder='Unesite ime filma' name='fname' value='".ucwords($result['name'])."'>
      <br> </td>
<td>	<input type='text' class='form-control' placeholder='Unesite žanr' name='genr' value='".$result['genre']."'>
       <br> </td>
<td>	<input type='text' class='form-control' placeholder='Unesite godinu' name='date' value='".$result['rdate']."'>
	<br> </td>
<td>       <input type='text' class='form-control' placeholder='Unesite trajanje' name='rtime' value='".$result['runtime']."'>
	<br> </td>
	<td>".$result['viewers']."</td>
        
              <div class='signupbutton'>
<td>             
                <button type='submit' class='btn btn-success' style='-webkit-filter: drop-shadow(5px 5px 5px #222);
                filter: drop-shadow(5px 5px 5px #222);' name='sub' value='submit'>Ažuriraj podatke</button>

              </div>
              </form>


              <br> </td>

<td>
 <button type='submit'> <span><a onclick=\"return confirm('Da li ste sigurni da želite ukloniti film?')\" href='removemovie.php?mid=".$result['mid']."'>Ukloni</a></span> </button>

</td>

</tr>";

         ?>
    </tbody>
</table>



      </div>
     
    </body>
  <footer class="page-footer font-small">

    <div class="footer-copyright text-center py-1"> Rađeno u svrhu projektnog zadatka | Fakultet za saobraćaj i komunikacije | Sarajevo 2021. ®
    </div>

  </footer>
  </html>