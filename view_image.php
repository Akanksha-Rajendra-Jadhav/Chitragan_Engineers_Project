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
						<i  class="fa-solid fa-user" aria-hidden="true"></i>
						<span>View Contact</span>
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
    </div>
<div class="view">
    <?php
$host="localhost";
$user="root";
$password="";
$dbname="chitragan";


$conn=mysqli_connect($host,$user,$password,$dbname);

$query="select * from image";
$query_run = mysqli_query($conn,$query);
while($row = mysqli_fetch_assoc($query_run)){


    
$host="localhost";
$user="root";
$password="";
$dbname="chitragan";


$conn=mysqli_connect($host,$user,$password,$dbname);



$ka = "select * from  image";
$co = mysqli_query($conn,$ka);

$tabl=mysqli_fetch_array($co);


echo "<a href='edit_image_form.php?title=$row[title]&file_name=$row[file_name]&created=$row[created]&description=$row[description]' style='color:white; display:fixed; border-radius:10px; background-color:blue; padding: 10px 50px; font-size:20px'>Edit</a>";

echo "<a href='delete_image.php?title=$row[title]&file_name=$row[file_name]&created=$row[created]&description=$row[description]' style='color:white; display:fixed; border-radius:10px; background-color:blue; padding: 10px 50px; font-size:20px; margin-left:2%;'>Delete</a>";
  ?>
   <div class="row d-flex">
            <div class="col-md-6 col-lg-4 d-flex ftco-animate">
              <div class="blog-entry align-self-stretch">
                 <!-- Image -->
                </a>
                <div class="text mt-3 px-4">
                  <div class="posted mb-3 d-flex">
                    <div class="img author" style="background-image: url(images/person_2.jpg);"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 d-flex ftco-animate">
              <div class="blog-entry align-self-stretch">
                
                <div class="card">
                  <div class="card-body">
                    
                    

                    <center>
                        <br><br>
                    <img src="<?php echo $row['file_name'] ?>" alt="" srcset="" width="300px"><br>
                    <h1><u><?php echo $row['title'];?></u></h1><br>
                    <div class="desc pl-3">
                      <span><b>Posted by CE Engeeners</b></span>
                    </div>
     <h4><?php echo $row['created'];?></h4>
     <h3 class="heading">Project Summery</h3>
                    <h1><u><?php echo $row['description'];?></u></h1><br><br>

                    
                  
                  </center>
      <hr size="5" color="black">
    </div>
  </div>
  <?php

}     
    ?> <!-- Image -->
                </a></div>
    
</body>
</html>