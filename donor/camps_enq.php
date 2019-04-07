<?php
 require_once('dbconnection.php');
require("donordetail.php");
if(isset($_POST['submit'])){
  echo "<pre>";
  print_r($_POST);
  die();
}
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <!-- <meta http-equiv="refresh" content="2"> -->
       <title>AboutUs</title>
       <link rel="stylesheet" href="../owlcarousel/owl.carousel.min.css">
       <link rel="stylesheet" href="../owlcarousel/owl.carousel.min.js">
       <link rel="shortcut icon" type="images/png" href="../images/drop.png">
       <meta name="viewport" content="width-device-width initial-scale=1">
       <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
       <link rel="stylesheet" href="../css/styleabc.css">
       <script src="../bootstrap/jquery.min.js"></script>

       <script src="../bootstrap/bootstrap.min.js"></script>
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>



   <body>
     <nav>
       <ul>
         <P style="color: gray; float: left; margin: 6px; font-weight: bolder; font-size: 20px; font-style: italic;">WELCOME, <?php echo $donor->name; ?></p>
         <li><a href="https://www.facebook.com/bkumarprasad" class="facebook"><i class="fa fa-facebook" style="background:#3B5998; color: white; padding:10px;"></i></a> </li>
         <li><a href="#" class="twitter"><i class="fa fa-twitter" style="background:  #55ACEE; color: white; padding:10px;"></i></a></li>
         <li><a href="#" class="google"><i class="fa fa-google" style="background:  #dd4b39; color:white; padding:10px;"></i></a></li>
         <li><a href="#" class="linkedin"><i class="fa fa-linkedin" style="background:#007bb5; color:white; padding:10px;"></i></a></li>
         <li><a href="#" class="youtube"><i class="fa fa-youtube" style="background:#bb0000; color:white; padding:10px;"></i></a></li>
       </ul>
     </nav>

     <!-- header image slider here -->
       <div id="myCarousel" class="carousel slide" data-ride="carousel">
         <!-- Indicators -->
         <ol class="carousel-indicators">
           <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
           <li data-target="#myCarousel" data-slide-to="1"></li>
           <li data-target="#myCarousel" data-slide-to="2"></li>
           <li data-target="#myCarousel" data-slide-to="3"</li>
           <li data-target="#myCarousel" data-slide-to="4"></li>
           <li data-target="#myCarousel" data-slide-to="5"></li>
           <li data-target="#myCarousel" data-slide-to="6"></li>
           <li data-target="#myCarousel" data-slide-to="7"></li>
           <li data-target="#myCarousel" data-slide-to="8"></li>
           <li data-target="#myCarousel" data-slide-to="9"></li>
           <li data-target="#myCarousel" data-slide-to="10"></li>
           <li data-target="#myCarousel" data-slide-to="11"></li>
           <li data-target="#myCarousel" data-slide-to="12"></li>
           <li data-target="#myCarousel" data-slide-to="13"></li>
         </ol>

         <!-- Wrapper for slides -->
         <div class="carousel-inner">
           <div class="item active">
             <img src="../images/blood-bank.jpg"  style="width:100%; height:321px;">
           </div>

           <div class="item">
             <img src="../images/Blood-Donor-Testing.jpg"  style="width:100%; height:321px;">
           </div>

           <div class="item">
             <img src="../images/benefits-of-blood-donation.jpg"  style="width:100%; height:321px;">
           </div>

           <div class="item">
             <img src="../images/1.jpg" style="width:100%; height:321px;">
           </div>

           <div class="item">
             <img src="../images/blood-screening-tests.jpg"  style="width:100%; height:321px;">
           </div>

           <div class="item">
             <img src="../images/donate-blood.jpg"  style="width:100%; height:321px;">
           </div>

           <div class="item">
             <img src="../images/Fullscreen-capture-2812014-30133-AM.jpg"  style="width:100%; height:321px;">
           </div>

           <div class="item">
             <img src="../images/m6840119_763x260-give-blood.jpg"  style="width:100%; height:321px;">
           </div>

           <div class="item">
             <img src="../images/DGZDGSDFG.jpg"  style="width:100%; height:321px;">
           </div>

           <div class="item">
             <img src="../images/1222719906.jpg"  style="width:100%; height:321px;">
           </div>

           <div class="item">
             <img src="../images/BANNER1.jpg"  style="width:100%; height:321px;">
           </div>

           <div class="item">
             <img src="../images/BANNER3.jpg"  style="width:100%; height:321px;">
           </div>

           <div class="item">
             <img src="../images/blood-bank.jpg"  style="width:100%; height:321px;">
           </div>

           <div class="item">
             <img src="../images\blood-donation.jpg" style="width:100%; height:321px;">
           </div>
         </div>

         <!-- Left and right controls -->
         <a class="left carousel-control" href="#myCarousel" data-slide="prev">
           <span class="glyphicon glyphicon-chevron-left"></span>
           <span class="sr-only">Previous</span>
         </a>
         <a class="right carousel-control" href="#myCarousel" data-slide="next">
           <span class="glyphicon glyphicon-chevron-right"></span>
           <span class="sr-only">Next</span>
         </a>
       </div>

   <!-- header file included here -->
   <?php require("donor_header.php"); ?>






gfhjgjgjgh





   <!--footer starts here--->
   <footer>
     <div class="footer">
         &copy2018 all right reserved
     </div>
   </footer>
   <!--footer starts here--->

    </body>
   </html>
