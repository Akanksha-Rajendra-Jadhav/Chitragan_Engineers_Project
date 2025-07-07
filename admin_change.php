<?php

$old_adminid=$_POST['oldid'];
$new_adminid=$_POST['newid'];

echo $old_adminid;
echo $new_adminid;

$conn=mysqli_connect('localhost','root','','CE');

$que="UPDATE admin SET admin_id='$new_adminid' WHERE admin_id='$old_adminid'";

mysqli_query($conn,$que);

header("location:admin.html");
// UPDATE admin SET admin_id='[value-1]' WHERE admin_id='[value-1]';

?>