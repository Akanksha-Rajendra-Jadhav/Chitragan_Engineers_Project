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
$name = ($_POST['name']);
$phone = ($_POST['phone']);
$email = ($_POST['email']);
$address = ($_POST['address']);
$services = ($_POST['services']);

}
// Insert data into the database
$sql = "INSERT INTO CE (name, phone, email,address, services)
        VALUES ('$name', '$phone','$email', '$address', '$services')";
       //$result=mysqli_query($conn,$sql);

 if ($conn->query($sql) === TRUE)
  {
    header("location:index.php");
    echo "<script>alert ('Your Inquiry is Submited')</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
