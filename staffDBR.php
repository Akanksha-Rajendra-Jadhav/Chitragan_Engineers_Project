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
    <br><br><br><br><br><br><br><br>
    <script>
        document.getElementById('logout').addEventListener('click', function() {
            window.location.href = '/logout';
        });
    </script>
</body>
</html>
<center style="margin:50px; padding-left:180px">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chitragan";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// The SQL query to select all data from the table
$sql = "SELECT * FROM Staff";
$result = $conn->query($sql);

// The table to display the data
echo "<table border='5'style='border: 1px solid black; border-collapse: collapse; background-color: #D6EEEE'>
<tr>
<th style='padding: 7px;'>firstName</th>
<th style='padding: 7px;'>lastName</th>
<th style='padding: 7px;'>email</yh>
<th style='padding: 7px;'>phone</th>
<th style='padding: 7px;'>project</th>
<th style='padding: 7px;'>date</th>
<th style='padding: 7px;'>projectArea</th>
<th style='padding: 7px;'>Edit</th>
<th style='padding: 7px;'>Delete</th>
</tr>";

if ($result->num_rows > 0) {
    // Output each row from the result
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td style='padding: 7px;'>" . $row["firstName"]. "</td>";
        echo "<td style='padding: 7px;'>" . $row["lastName"]. "</td>";
        echo "<td style='padding: 7px;'>" . $row["email"]. "</td>";
        echo "<td style='padding: 7px;'>" . $row["phone"]. "</td>";
        echo "<td style='padding: 7px;'>" . $row["project"]. "</td>";
        echo "<td style='padding: 7px;'>" . $row["date"]. "</td>";
        echo "<td style='padding: 7px;'>" . $row["projectArea"]. "</td>";
        echo "<td><a href='edit_form_staff.php?firstName=$row[firstName]&lastName=$row[lastName]&email=$row[email]&phone=$row[phone]&project=$row[project]&date=$row[date]&projectArea=$row[projectArea]'>Edit</a> </td>";
        echo "<td><a href='delete_staff.php?firstName=$row[firstName]&lastName=$row[lastName]&email=$row[email]&phone=$row[phone]&project=$row[project]&date=$row[date]&projectArea=$row[projectArea]'>Delete</a> </td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='3'>No results found</td></tr>";
}
echo "</table>";

// Close the connection
$conn->close();

?>
</center>
