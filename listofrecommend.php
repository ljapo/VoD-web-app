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

      <div class="jumbotron" style='background: #363636;margin-bottom:3px;margin-top:3px'">
<table class="table table-dark">
    <thead>
        <tr>
            <th>NAZIV</th>
	    <th>BROJ PRIJEDLOGA</th>
        </tr>
    </thead>
    <tbody>
        <?php
              include 'dbh.php';
              $sql = "SELECT prijedlog, count(prijedlog) FROM prijedlozi GROUP BY prijedlog ORDER BY count(prijedlog) DESC";
              $newrecords = mysqli_query($conn,$sql); 

while($result = mysqli_fetch_assoc($newrecords)){
  echo '<tr>
        <td><font size="4" >'.ucwords($result['prijedlog']).'</td>
        <td><font size="4" >'.ucwords($result['count(prijedlog)']).'</td>
        </tr>';
}





         ?>
    </tbody>
</table>



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