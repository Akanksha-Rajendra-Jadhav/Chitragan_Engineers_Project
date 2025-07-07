<?php

$title=$_GET['title'];
$created=$_GET['created'];
$description=$_GET['description'];
$file_name=$_GET['file_name'];


echo $title;
echo $created;
echo $description;
echo $file_name;

$host="localhost";
$user="root";
$pass="";
$dbname="CE";

$conn=mysqli_connect($host,$user,$pass,$dbname);


$qu="DELETE FROM image WHERE file_name='$file_name'";

$co= mysqli_query($conn,$qu);

header("location: view_image.php");



?>