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
    <br><br><br><br><br><br><br><br>

    <script>
        document.getElementById('logout').addEventListener('click', function() {
            window.location.href = '/logout';
        });
    </script>


<form action="edit_image.php" method="post" style="margin-left:400px;">
        <b>title</b><input type="text" name="title" id="" value="<?php echo $_GET['title'] ?>"><br><br>
        <b>created</b><input type="text" name="created" id="" value="<?php echo $_GET['created'] ?>"><br><br>
        <b>description</b><input type="text" name="description" id="" value="<?php echo $_GET['description'] ?>"><br><br>
        <input type="hidden" value="<?php echo $_GET['file_name']?>" name="file_name"><br><br>
        <input type="submit" value="Submit">
</body>
</html>

