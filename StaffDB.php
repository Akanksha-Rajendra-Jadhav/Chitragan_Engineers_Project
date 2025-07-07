
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chitragan";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if($submit=isset($_POST['submit']));
{


// Retrieve form data
$firstName = ($_POST['firstName']);
$lastName = ($_POST['lastName']);
$email = ($_POST['email']);
$phone = ($_POST['phone']);
$project = ($_POST['project']);
$date = ($_POST['date']);
$projectArea = ($_POST['projectArea']);
}
// Insert data into the database
$sql = "INSERT INTO staff(firstName,  lastName, email, phone, project, date, projectArea) 
        VALUES ('$firstName', '$lastName','$email' ,'$phone' , '$project' , '$date','$projectArea')";
        
        //  $result=mysqli_query($conn,$sql);

 if ($conn->query($sql) === TRUE)
  {
    $file=fopen("staffF.html","r");
    echo fread($file,filesize("staffF.html"));
    echo "<script>alert ('New record created successfully')</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
