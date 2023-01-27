<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Monsztera</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
           <?php
            require 'header.php';
           ?>
           <div id="bannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent">
                       <h1>Monsztera</h1>
                       <p>Best potted plants in Gdańsk</p>
                       <a href="products.php" class="btn btn-danger">Shop Now</a>
                   </div>
                   </center>
               </div>
           </div>
           <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="products.php">
                                <img src="img/flowers.jpg" alt="Flowers">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">Flowers</p>
                                        <p>Choose among the best available in the world.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/pots.jpg" alt="Pots">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Pots</p>
                                    <p>Made by clay and plastic.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/accesories.jpg" alt="Accesories">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Accesories</p>
                                   <p>Best tools ever.</p>
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
           </div>
            <br><br> <br><br><br><br>
           <footer class="footer"> 
               <div class="container">
               <center>
                   <p>&copy Dawid Witkowski</p>
               </center>
               </div>
           </footer>
        </div>
    </body> 
</html>