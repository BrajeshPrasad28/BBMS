<?php
require ('../dbconnection.php');
session_start();

$email = $_SESSION['email'];
$password = $_SESSION['password'];

$query = mysqli_query($con, "SELECT * FROM donarregistration WHERE email = '$email' AND password = '$password'");
$donor = mysqli_fetch_object($query);

 ?>
