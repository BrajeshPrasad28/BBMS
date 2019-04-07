<?php
 require_once('../dbconnection.php');
 require('staff_details.php');

 if(isset($_POST["request"]))
 {
  //  echo "<pre>";
  // print_r($_POST);
  // print_r($donor); die();
  $date_of_storage=trim($_POST["date_of_storage"]);
  $place_of_storage=trim($_POST["place_of_storage"]);
  $amount=trim($_POST["amount"])
 $rs=mysqli_query($con,"INSERT INTO blood_bank (date_of_storage,place_of_storage,amount) VALUES('$date_of_storage','$place_of_storage','$amount')") or die(mysqli_error($con));
 if($rs)
 {
  echo"<script> alert('succesfully saved')</script>";
 }
 else
 {
   echo"<script> alert('unable to saved')</script>";
 }
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
       <P style="color: gray; float: left; margin: 6px; font-weight: bolder; font-size: 20px; font-style: italic;">WELCOME, <?php echo $staff->name; ?></p>
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



<?php require("staff_header.php"); ?><br><br><br>

<div class="container">
  <form class="wrap" method="post">
    <div style="height:530px; width:700px; margin:auto; margin-top:10px; margin-bottom:10px; background-color:white; border:2px solid red; box-shadow:4px 1px 20px black;">

    <table cellpadding="0" cellspacing="0" style="margin:auto; width:100%;">
      <tr><td colspan="2"  align="center" style="height: 70px;background-color: orange;border: 2px solid brown;font-size: 35px;font-family: san-sarief;font-weight: bolder;">BLOOD CHECKUP</td></tr>

      <!-- <tr><td colspan="2">&nbsp;</td></tr> -->

        <tr><td  style=" padding-left:20px; padding-bottom: 12px;" ><img src="../Images/blood3.jpg" width="170px" class="shaddoww" style="margin-top: -40px;margin-left: 20px;height: 301px;border: 2px solid rosybrown;"/>&nbsp; </td>
        <td style="vertical-align:top;padding-top:0px;">
            <table cellpadding="0" cellspacing="1px" style="width:100%; height:424px;">
             <!-- <tr><td class="lefttd">Checkup ID:</td><td></td></tr> -->
             <tr><td class="lefttd">Date Of Storage:</td><td><input type="date" id="date_of_storage" name="date_of_storage" title="please enter date" required/></td></tr>
             <tr><td class="lefttd">Place Of Storage:</td><td><input type="text" id="place_of_storage" name="place_of_storage" title="please enter date" required/></td></tr>
             <tr><td class="lefttd">Blood Amount:</td><td><input type="text" id="amount" name="amount" title="please enter amount" required/></td></tr>
             <tr><td>&nbsp;</td>
               <td><input type="submit" value="Submit" name="submit" style="border:1px; background:ORANGE; width:100px; height:30px; border-radius:2PX; color:BLACK; font-weight:bold; font-size:14px; ">
               </td></td></tr></table>
        </div>
    </table></form></div></div><br><br><br><br><br>





    <!--footer starts here--->
    <footer>
      <div class="footer">
        <br>
        <p style="font-weight:bolder; font-weight: bolder; color:white;">DEVELOP AND DESIGN BY BRAJESH PRASAD</p>
          <p style="font-weight: bolder;">&copy2018 all right reserved</p>

    </div>
    </footer>
    <!--footer starts here--->



     </body>
   </html>
