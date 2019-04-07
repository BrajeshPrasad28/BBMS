<?php
require ('../dbconnection.php');
session_start();

$email = $_SESSION['email'];
$password = $_SESSION['password'];

$query = mysqli_query($con, "SELECT * FROM staffinfo WHERE email = '$email' AND password = '$password'");
$staff = mysqli_fetch_object($query);

 ?>
