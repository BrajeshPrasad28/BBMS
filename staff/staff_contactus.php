<?php
 include('../dbconnection.php');
 require("staff_details.php");

 $msg = "";
 if(isset($_POST["submit"]))
 {
   // echo "<pre>";
   // print_r($_POST); die();
 	$name=trim($_POST["name"]);
  $email=trim($_POST["email"]);
  $phone=trim($_POST["phone"]);
  $message=trim($_POST["message"]);
  $rs=mysqli_query($con,"insert into staff_feedback (name,email,phone,message) VALUES ('$name','$email','$phone','$message')") or die(mysqli_error());
     	if($rs)
     	{
     		echo"<script> alert('successfully saved')</script>";
     	}
     	else
     	{
     		echo"<script> alert('unable to save')</script";
     	}
  }
 ?>

<style media="screen">
  .contact{
    background: #fff;
    padding: 30px;
    border-radius: 20px;
    margin-top: 50px;
    margin-bottom: 50px;
    position: static;
    width:500px;
  }
  h3{
    margin: 0px;
    padding: 10px;
  }
  .form1{
    border: 2px solid orange;
    padding: 0px 10px 14px;
  }
  /* .form-group{
    margin-top: 50px;
  } */
</style>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- <meta http-equiv="refresh" content="2"> -->
      <title>Hospital Enquire</title>
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


<?php require("staff_header.php"); ?>
<br><br><br><br><br><br><br>

<div class="container">
  <div class="row">
    <div class="col-sm-4 col-sm-offset-3"  style=" position: static; height: 670px; margin-top: -132px;">
      <div class="contact">
        <form class="form1" method="post" style="box-shadow:4px 1px 20px black;">
          <h3 class="text-center" style="font-size:40px; background-color:orange; width:416px; margin-top:0px; margin-bottom: 45px;">Contact</h3>
          <div class="form-group">
            <label for="Name">Name</label>
            <input type="text" name="name" value=" <?php echo $staff->name; ?>"class="form-control" placeholder="Enter Name">
          </div>
            <div class="form-group">
              <label for="Email">Email</label>
              <input type="text" name="email" value=" <?php echo $staff->email; ?>"class="form-control" placeholder="Enter Email">
            </div>
              <div class="form-group">
                <label for="Phone">Phone</label>
                <input type="text" name="phone"value=" <?php echo $staff->phone; ?>" class="form-control" placeholder="Enter Phone">
              </div>
                <div class="form-group">
                  <label for="Message">Message</label>
                  <textarea name="message" class="form-control" rows="5" cols="50" placeholder="Enter Your Message Here" required></textarea>
                </div>
                <input type="submit" name="submit" value="Submit" class="btn btn-primary" style="margin-left: 310px;">
        </form>


      </div>

    </div>

  </div>
</div><br><br>

<div class="col-sm-12" style="background-color:black; height:250px;">
  <h3 style="text-align: center;color: white;font-family: san-sarif;font-size: 34px;">OR YOU CAN CONTACT US AT</h3>

  <div class="col-sm-4">
    <div class="style" style="color:white; font-size: 150px; font-family: san-sarif; font-weight: bolder;">
    <h4>Address- GIMT AZARA, ASSAM</h4>
    <h4>Phone- 8723969733</h4>
    <h4>Email- gimt@gmail.com</h4>
  </div></div>



</div>
</div>

<!--footer starts here--->
<footer>
  <div class="footer">
    &copy2018 all right reserved
  </div>
</footer>
<!--footer starts here--->

</body>
</html>
