<style media="screen">

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
	border-bottom: 2px transparent  red;
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

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .xyz {
  padding-top: 60px;
}

</style>

<ul class="nav nav-expand-sm sticky-top">
			<li class="active"><a href="index.php"><i class="fas fa-home" style="color: black;"></i> Home</a></li>
			<li><a href="aboutus.php">About</a></li>
			<!-- <li><a href="request_blood.php">Send Request</a></li> -->
      <li><a href="add_staff.php">add staff</a></li>
			<li><a href="add_hospital.php">Add Hospital</a></li>
      <li><a href="add_news.php"><i class="fas fa-praying-hands" style="color: black;"></i>add news</a></li>
      <li><a href="contact.php"><i class="fa fa-fw fa-envelope" style="color: black;"></i> Contact Us</a></li>
				<ul>
				</ul>
			</li>
</ul>
