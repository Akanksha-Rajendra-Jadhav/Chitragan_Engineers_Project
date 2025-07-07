<?php

$name = $_GET['name'];
$phone = $_GET['phone'];
$email = $_GET['email'];
$address = $_GET['address'];
$services = $_GET['services'];


$host="localhost";
$user="root";
$pass="";
$dbname="CE";

$conn=mysqli_connect($host,$user,$pass,$dbname);


$qu="DELETE FROM staff WHERE email='$email'";

$co= mysqli_query($conn,$qu);

header("location: staffDBR.php");
// echo $name;
// echo $phone;
// echo $email;
// echo $address;
// echo $services;



?>