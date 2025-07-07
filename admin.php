
<?php

session_start();

if(!isset($_SESSION['submit']) || $_SESSION['submit']!=true){
    header("location:admin.html");
    exit;
}	

$ue=$_SESSION['username'];


$host="localhost";
$user="root";
$password="";
$dbname="chitragan";


$conn=mysqli_connect($host,$user,$password,$dbname);

$qu = "select * from contact ";
$co = mysqli_query($conn,$qu);

$tabl=mysqli_fetch_assoc($co);
$nu=mysqli_num_rows($co);





	

// $ka = "select * from  where a_id='$ue'";
// $co = mysqli_query($conn,$ka);

// $tabl=mysqli_fetch_array($co);


// $fin=$tabl['firstname'];
// $ema=$tabl['email'];

?>


<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="admin.css">
</head>
<body>
	<input type="checkbox" id="checkbox">
	<header class="header">
		<h2 class="u-name">Admin <b>Profile</b>
			<label for="checkbox">
				<i id="navbtn" class="fa fa-bars" aria-hidden="true"></i>
			</label>
		</h2>
		<i class="fa fa-user" aria-hidden="true"></i>
	</header>
	<div class="body">
		<nav class="side-bar">
			<div class="user-p">
				<img src="<?php echo $tabl['imgpath'] ?>" alt="" height="100px" width="60px" style="border-radius: 100%;">
				<h4><?php echo $fin;?></h4>
                <h4>Admin Id:<?php echo $ue;?></h4>
                <h4><?php echo $ema;?></h4>
			</div>
			<ul><hr>
				<li>
					<a href="admin_profile.php">
						<i class="" aria-hidden="true"></i>
						<span>Enquiry List</span>
					</a>
				</li>
	
				<li>
					<a href="staffF.html">
						<i class="fa" aria-hidden="true"></i>
						<span>Staff list</span>
					</a>
				</li>
				<li>
					<a href="logout.php">
						<i class="fa fa-power-off" aria-hidden="true"></i>
						<span>Logout</span>
					</a>
				</li>
			</ul>
		</nav>
		<!-- <section class="section-1">
			<h1>WELCOME</h1>
			<p>#CodingWithElias</p>
		</section> -->
	<form method="post">>
                            
    <center>
    <?php
    $connection = mysqli_connect("localhost","root","","project");
//    rom notice';
//    $query = 'select * f  $query_run = mysqli_query($connection,$query);
//     while($row = mysqli_fetch_assoc($query_run)){


        
$host="localhost";
$user="root";
$password="";
$dbname="project";


$conn=mysqli_connect($host,$user,$password,$dbname);



$ka = "select * from a_student where prn='456' ";
$co = mysqli_query($conn,$ka);

$tabl=mysqli_fetch_array($co);
      ?>
      <div class="card">
        <div class="card-body">
            
          <h1 class="card-title" style="color: aqua;"><u><?php echo $row['title'];?>:-</u></h1><br>
          
          <h3 class="card-text" style="color: yellow;"><?php echo $row['message'];?></h3>
          <?php echo "<embed src='".$row['filepath']."' height='200px' width='400px''>"; ?><br>
		  <?php echo "<a href='n_del.php?title=$row[title]&message=$row[message]&path=$row[filepath]'>Delete</a>"; ?><br><br>
          <hr size="5" color="pink" >
        </div>
      </div>
      
    ?>
</center></form>
                       
					
					</div>

  </body>
</html>