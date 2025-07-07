<?php

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$address = $_POST['address'];
$services = $_POST['services'];
$name_h = $_POST['name_h'];
$phone_h = $_POST['phone_h'];

$conn=mysqli_connect('localhost','root','','CE');

$que="UPDATE ce SET name='$name',phone='$phone',email='$email',services='$services',address='$address' WHERE name='$name_h',phone='$phone_h'";
mysqli_query($conn,$que);

$query="SELECT * from CE where name='$name',phone='$phone',email='$email',services='$services',address='$address'";

$result=mysqli_query($conn,$query);
$count=mysqli_num_rows($result);


if ($count>0) {
    # code...
    echo "<script>alert('Update Done')</script>";

    $file=fopen("DBR.php","r");
    echo fread($file,filesize("DBR.php"));
}

else {
    # code...
    
    echo "<script>alert('Update Not Done')</script>";

    $file=fopen("DBR.php","r");
    echo fread($file,filesize("DBR.php"));
}
?>