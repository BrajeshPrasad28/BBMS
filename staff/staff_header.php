<style>
.nav{
	/* overflow: hidden; */
	background: orange;
	width: 100%;
	height: 43px;
	margin-top: 0px;
	position: sticky;
	top: 0px;
}

.nav li {
	display: inline-block;
}

.nav li a{
	color:black;
	font-size: 15px;
  font-weight: bold;
	padding: 11px 38.9px;
	border-right: 1px solid #fff;
	border-bottom: 2px transparent red;
}

.nav li a:hover{
	color:red;
	background-color: orange;
	border-bottom: 2px solid red;
}

.nav li ul {
	position: absolute;
	display: none;
	z-index: 9999;
}
.nav li:hover ul {
	display: block;
	background: orange;
	padding: 11px 15px;
}

.nav li ul li{
  display: block;

}

.nav li ul li a{
	background: orange;
	padding: 8px;
	color:black;
	width: 100%;
	display: block;
	text-decoration: none;
}

.nav li ul li a:hover{
		background: orange;
		color:red;
}


.nav li ul li ul{
  display: none!important;
}
.nav2{
  width: 200px;
  z-index: 9999;
}
.nav li ul li:hover ul{
  display: block!important;
  width: 150px;
  position: absolute;
  margin-left: 200px;
  margin-top: -30px;
}

</style>
<ul class="nav">
			<li class="active"><a href="staff_index.php"><i class="fas fa-home" style="color: black;"></i>Home</a></li>
      <li><a href="staff_about.php">About</a></li>
      <li><a href="#">Donate Enquire<i class="fas fa-caret-down"></i></a>
				<ul style="margin-left: -4px;width: 217px;">
					<li><a href="staff_donateblood_req_enq.php">Donation Request</a></li>
					<li><a href="donation_accepted.php">Donation Accepted</a></li>
					<li><a href="donation_rejected.php">Donation Rejected</a></li>
				</ul>
			</li>
			<li><a href="staff_takeblood.php">Take Blood</a></li>
      <li><a href="#">Enquire <i class="fas fa-caret-down"></i></a>
        <ul class="nav1" style="width: 196px;margin-left: -27px;">
          <li><a href="blood_req_enq.php">View Blood Request</a></li>
					<li><a href="blood_req_acpt.php">View Blood Accepted</a></li>
					<li><a href="blood_req_rej.php">View Blood Rejected</a></li>
					<li><a href="staff_giveblood.php">Deliver Blood</a></li>

          <li><a href="#">Camps</a>
            <ul class="nav2" style="margin-left: 166px;margin-top: -54px; width:185px;">
            	<li><a href="camps_enq.php">Camps Enquire</a></li>
            	<li><a href="campgallary.php">View Camps Gallary</a></li>
            </ul></li>
          <li><a href="hospital_enq.php">Hospital Enquire</a></li>
					<li><a href="staff_donor_enq.php">Donor Enquire</a></li>
        </ul>
      </li>
      <li><a href="staff_contactus.php"><i class="fa fa-fw fa-envelope" style="color: black;"></i>Contact Us</a></li>
      <li><a href="staff_profile.php">Profile<i class="fas fa-caret-down"></i></a>
        <ul>
          <li><a href="staff_changepass.php">Change Password</a></li>
          <li><a href="stafflogout.php">Logout</a></li>

        </ul>
      </li>
</ul>
