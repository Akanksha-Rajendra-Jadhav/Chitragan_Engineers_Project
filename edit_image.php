
<?php



$title=$_POST['title'];
$created=$_POST['created'];
$description=$_POST['description'];
$file_name_h=$_POST['file_name'];

echo $title."<br>";
echo $created."<br>";
echo $description."<br>";
echo $file_name_h."<br>";

$conn=mysqli_connect('localhost','root','','CE');

$que="UPDATE image SET title='$title',created='$created',description='$description' WHERE file_name='$file_name_h'";
mysqli_query($conn,$que);


header("location:view_image.php");

?>
