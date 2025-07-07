<?php

$old_mail=$_POST['oldid'];
$adminid_h=$_POST['adminid_c'];



$conn=mysqli_connect('localhost','root','','CE');

$que="UPDATE admin SET email='$old_mail' WHERE admin_id='$adminid_h'";

mysqli_query($conn,$que);

$file=fopen("admin.html","r");
echo fread($file,filesize("admin.html"));
// UPDATE admin SET admin_id='[value-1]' WHERE admin_id='[value-1]';

?>