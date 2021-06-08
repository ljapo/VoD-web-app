<?php
session_start();

 ?>


 <!DOCTYPE html>
 <head>
   <meta charset="utf-8">
   <title>Jumbo-Admin</title>
   <link rel="stylesheet" href="user.css" type="text/css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 </head>
 <body>
   <header>
     <div class="container-fluid" style="color:white;background:black;">
       <nav class="navbar navbar-expand-md navbar-dark bg-dark">
           <a href="homepage.php" class="navbar-brand"> <img src="images/logo.png" alt=""> </a>
           <span class="navbar-text">Jumbo</span>

           <ul class="navbar-nav">
             <li class="nav-item"> <a href="homepage.php" class="nav-link"> Početna </a> </li>
             <li class="nav-item"> <a href="logout.php" class="nav-link"> Odjavi me</a> </li>

           </ul>

       </nav>

       <div class="container">

         <div class="jumbotron">
           <h1 style="color:white">Unesite podatke o filmu</h1>
           <p> <b></b> </p> <br>

           <form class="" action="admin-control.php" method="POST" enctype="multipart/form-data">

            <input type="text" class="form-control" placeholder="Naziv" name="mname" value=""><br>
             <input type="text" class="form-control" placeholder="Godina" name="release" value="">
             <br>
             <input type="text" class="form-control" placeholder="Žanr" name="genre" value="">
             <br>
             <input type="number" class="form-control" placeholder="Trajanje" name="rtime" value="">
             <br>
             <input type="text" class="form-control" placeholder="Opis" name="desc" value="">
             <br>
             <div class="row">
               <div class="col">
                 <table >
                   <tr>
                     <td> <label for=""><b>Učitaj sliku : </b></label> </td>
                     <td>
                          <div class="">
                              <input type="hidden" name="size" value="10000000">

                              <input type="file" name="image" value="">
                          </div>
                     </td>
                   </tr>
                 </table>
               </div>
               <div class="col">
                 <table>
                   <tr>
                     <td> <label for=""><b>Učitaj video : </b></label> </td>
                     <td>
                          <div class="">
                              <input type="hidden" name="size" value="3000000000">

                              <input type="file" name="video" value="">
                          </div>
                     </td>
                   </tr>
                 </table>

               </div>
             </div> <br><br>
             <div class="signupbutton">
               <input type="submit" class ="btn btn-success btn-lg" style='-webkit-filter: drop-shadow(5px 5px 5px #222);
  filter: drop-shadow(5px 5px 5px #222);' name="upload" value="Potvrdi" >
             </div>


           </form>

        </div>


         </div>

       </div>


   </div>
   <footer class="page-footer font-small blue">

    <div class="footer-copyright text-center py-1" style="color:white;background:black;"> Rađeno u svrhu projektnog zadatka | Fakultet za saobraćaj i komunikacije | Sarajevo 2021. ®
    </div>

  </footer>

 </header>
 
   </body>
 </html>
