<?php
 require_once('../dbconnection.php');

 require("staff_details.php");

 if(!isset($_SESSION['email'])){
   header("location: ../stafflogin.php");
 }

 $msg = "";
 $msg1 = "";
 // echo $donor->email;
if(isset($_POST['submit'])){
  $password = $_POST['password'];
    $c_password = $_POST['c_password'];

    if($password == $c_password){
      $query = mysqli_query($con,"UPDATE staffinfo SET password='$password' WHERE email='$donor->email' AND password='$donor->password' ") or die(mysqli_error($con));
      $_SESSION['password'] = $password;
      $msg1 = "Password Changed";
    }else{
      $msg = "Confirm Password didn't matched with Password";
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
         <P style="color: gray; float: left; margin: 6px; font-weight: bolder; font-size: 20px; font-style: italic;">WELCOME,<?php echo $staff->name; ?></p>
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
   <?php require("staff_header.php"); ?>

<style media="screen">
  .profile{
    margin:20px;
    height: auto;
    width: 300px;
    padding: 10px;
    background: #fff;
    border-radius: 10px;
    box-shadow: 0px 0px 8px 0px #ccc;
    margin: 20px auto;
  }
  .img{
    width: 100%;
  }
  .passchange{
    background: #fff;
    border-radius: 10px;
    padding: 30px;
    margin-top: 50px;
  }
  .chpass{
    margin: 0px;
    margin-bottom: 30px;
    font-size: 20px;
  }
</style>

  <div class="container">
    <div class="col-sm-4 col-sm-offset-4" style="border: 1px solid brown;height: 355px;margin-top: 60px;margin-bottom: 80px; position:static;border-radius: 8px;">
      <div class="passchange" style="margin-top: 0px;">
        <form method="post" style="position: static;margin-bottom: 0px;">
          <h5 class="text-center chpass"><img src="../images/change.png" alt="changepic" style="margin-left: -45px;width: 378px;height: 61px;margin-top: -30px;padding-bottom: 0px;"></h5>
          <p class="text-danger"><?php echo $msg; ?></p>
          <p class="text-success"><?php echo $msg1; ?></p>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Enter Password">
          </div>
            <div class="form-group">
              <label for="c_password">Confirm Password</label>
              <input type="password" class="form-control" name="c_password" placeholder="Enter Confirm Password">
            </div>
              <input type="submit" class="btn btn-info" name="submit" value="Submit" style="margin-left: 65px;width: 148px;">
        </form>
      </div>
    </div>
  </div>j



  <!--footer starts here--->
  <footer>
    <div class="footer">
        &copy2018 all right reserved
    </div>
  </footer>
  <!--footer starts here--->

</body>
</html>
