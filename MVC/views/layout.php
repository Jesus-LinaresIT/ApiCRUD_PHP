<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <title>AppMVC</title>

   <!-- PLUGINS CSS -->

   <!-- Latest compiled and minified CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

   <!-- PLUGINS JS -->

   <!-- jQuery library -->
   <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>

   <!-- Popper JS -->
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

   <!-- Latest compiled JavaScript -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

   <!-- Latest compiled FontAwesome -->
   <script src="https://kit.fontawesome.com/e632f1f723.js" crossorigin="anonymous"></script>
</head>

<body>
   <!--===================================
      LOGO
   ====================================-->

   <div class="container-fluid">
      <img src="img/logo.png" alt="logo" class="mx-auto d-block py-3">
   </div>

   <!--===================================
      NAVEGATION
   ====================================-->

   <div class="container-fluid bg-light">
      <div class="container">
         <ul class="nav nav-justified py-2 nav-pills">

            <?php if (isset($_GET["pages"])): ?>

               <?php if ($_GET["pages"]=="signUp"): ?>
                  <li class="nav-item">
                     <a href="index.php?pages=signUp" class="nav-link active">Sign up</a>
                  </li>
               <?php else: ?>
                  <li class="nav-item">
                     <a href="index.php?pages=signUp" class="nav-link">Sign up</a>
                  </li>
               <?php endif ?>

               <?php if($_GET["pages"]=="login"): ?>
                  <li class="nav-item">
                    <a href="index.php?pages=login" class="nav-link active">Login</a>
                  </li>
               <?php else: ?>
                  <li class="nav-item">
                    <a href="index.php?pages=login" class="nav-link">Login</a>
                  </li>
               <?php endif ?>

               <?php if($_GET["pages"]=="home"): ?>
                  <li class="nav-item">
                     <a href="index.php?pages=home" class="nav-link active">Home</a>
                  </li>
               <?php else: ?>
                  <li class="nav-item">
                     <a href="index.php?pages=home" class="nav-link">Home</a>
                  </li>
               <?php endif ?>

               <?php if($_GET["pages"]=="signOut"): ?>
                  <li class="nav-item">
                     <a href="index.php?pages=signOut" class="nav-link active">Sign out</a>
                  </li>
               <?php else: ?>
                  <li class="nav-item">
                     <a href="index.php?pages=signOut" class="nav-link">Sign out</a>
                  </li>
               <?php endif ?>

            <?php else: ?>
               <li class="nav-item">
                  <a href="index.php?pages=signUp" class="nav-link active">Sign up</a>
               </li>
               <li class="nav-item">
                  <a href="index.php?pages=login" class="nav-link">Login</a>
               </li>
               <li class="nav-item">
                  <a href="index.php?pages=home" class="nav-link">Home</a>
               </li>
               <li class="nav-item">
                  <a href="index.php?pages=signOut" class="nav-link">Sign out</a>
               </li>
            <?php endif ?>

         </ul>
      </div>
   </div>

   <!--===================================
      CONTENT
   ====================================-->
   <div class="container-fluid">
      <div class="container py-5">
         <?php

            if (isset($_GET["pages"])){

               if($_GET["pages"]== "signUp" ||
                  $_GET["pages"]== "login" ||
                  $_GET["pages"]== "home" ||
                  $_GET["pages"]== "signOut"){

                  include "pages/".$_GET["pages"].".php";
               }else{
                  include "pages/error404.php";
               }

            }else{
               include "pages/signUp.php";
            }

         ?>
      </div>
   </div>


</body>
</html>