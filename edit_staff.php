
<?php



$firstName=$_POST['firstName'];
$lastName=$_POST['lastName'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$project=$_POST['project'];
$date=$_POST['date'];
$projectArea=$_POST['projectArea'];
$email_h=$_POST['email_h'];

echo $firstName."<br>";
echo $lastName."<br>";
echo $email."<br>";
echo $phone."<br>";
echo $project."<br>";
echo $date."<br>";
echo $projectArea."<br>";
echo $email_h."<br>";


$conn=mysqli_connect('localhost','root','','CE');

$que="UPDATE staff SET date='$date',firstName='$firstName',email='$email',lastName='$lastName',phone='$phone',project='$project',projectArea='$projectArea' WHERE email='$email_h'";
mysqli_query($conn,$que);

// $query="SELECT * from staff where date='$date',firstName='$firstName',email='$email',lastName='$lastName',phone='$phone',project='$project',projectArea='$projectArea'";

// $result=mysqli_query($conn,$query);
// $count=mysqli_num_rows($result);


// if ($count>0) {
//     # code...
//     echo "<script>alert('Update Done')</script>";

//     $file=fopen("staffDBR.php","r");
//     echo fread($file,filesize("staffDBR.php"));
// }

// else {
//     # code...
    
//     echo "<script>alert('Update Not Done')</script>";

//     $file=fopen("staffDBR.php","r");
//     echo fread($file,filesize("staffDBR.php"));
// } 
header("location:staffDBR.php");
?>
