<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: admin.html");
    exit;
}	

$admin_id=$_SESSION['admin_id'];

$host="localhost";
$user="root";
$password="";
$dbname="chitragan";



$conn=mysqli_connect($host,$user,$password,$dbname);

$qu = "select * from admin";
$co = mysqli_query($conn,$qu);

$tabl=mysqli_fetch_assoc($co);
$nu=mysqli_num_rows($co);
	

$ka = "select * from admin where admin_id='$admin_id' ";
$co = mysqli_query($conn,$ka);

$tabl=mysqli_fetch_array($co);



$admin_id=$tabl['admin_id'];
$email=$tabl['email'];
$password=$tabl['password'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Admin Dashboard</title>
    <style>
        
    </style>
    <link rel="stylesheet" href="view_image.css">
</head>
<body>
    <center>
    <h1 class="admin">Admin Dashboard</h1></center><hr>
    <div class="sidebar">
    <ul>        
    <li>
					<a href=>
                    <i class="fa-regular fa-circle-down" style="color: #9ce62d;"></i>
						<span style="background-color: yellowgreen; padding:12px; width:30px;">VIEW</span>
					</a>
				</li>
				<li>
					<a href="DBR.php">
						<i  class="fa-solid fa-user" aria-hidden="true"></i>
						<span >Enquiry list</span>
					</a>
				</li>
				<li>
					<a href="staffDBR.php">
						<i  class="fa-solid fa-user" aria-hidden="true"></i>
						<span> Staff list</span>
					</a>
				</li>
                
				<li>
					<a href="contact.php">
                    <i class="fa-solid fa-user" style="color: #f1f4f8;"></i>
						<span>View Contact </span>
					</a>
				</li>
				<li>
					<a href="view_image.php">
                    <i class="fa-solid fa-images" style="color: #f1f4f8;"></i>
						<span>View Image </span>
					</a>
				</li>
                <li>
					<a href>
                    <i class="fa-regular fa-circle-down" style="color: #9ce62d;"></i>
						<span style="background-color: yellowgreen; padding:12px"> ADD</span>
					</a>
				</li>
                <li>
					<a href="image.html">
                    <i class="fa-solid fa-images" style="color: #f1f4f8;"></i>
						<span>Image Upload</span>
					</a>
				</li>
                <li>
					<a href="staffF.html">
						<i  class="fa-solid fa-user" aria-hidden="true"></i>
						<span>Add Staff List</span>
					</a>
				</li>
				<li>
					<a href="logout.php">
                    <i class="fa-solid fa-right-from-bracket" style="color: #a1f29c;"></i>
						<span>Logout</span>
					</a>
				</li>
			</ul>
    </div><br><br><br><br><br>
<form action="" style=" background-color: #fff; border: 1px solid #ccc; padding: 30px; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);margin-left: 40%; margin-right: 30%; ">
<h1 style=" background-color: #fff; border: 1px solid #ccc; padding: 30px; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);margin-left: 40%; margin-right: 30%; ">Hello</h1> <b><?php echo $admin_id; ?></b><br><br>
<h1 style=" background-color: #fff; border: 1px solid #ccc; padding: 30px; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);margin-left: 40%; margin-right: 30%; ">Email</h1> <b><?php echo $email; ?></b><br><br>
<?php
echo "<a href='adminid.php?adminid=$tabl[admin_id]'><b>Change Admin Id</b></a><br><br>";
echo "<a href='adminmail.php?adminid=$tabl[admin_id]'><b>Change Admin Mail</b></a><br><br>";
echo "<a href='adminpass.php?adminid=$tabl[admin_id]'><b>Change Admin Password</b></a><br><br>";

?>
</form>
    <script>
        document.getElementById('logout').addEventListener('click', function() {
            window.location.href = '/logout';
        });
    </script>
</body>
</html>
