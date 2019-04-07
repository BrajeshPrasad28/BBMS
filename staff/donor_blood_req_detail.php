<?php
require ('../dbconnection.php');
session_start();
$query = mysqli_query($con, "SELECT * FROM bloodrequest");
$request = mysqli_fetch_object($query);

 ?>
