<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Admin Dashboard</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
        }

        .sidebar {
            position: fixed;
            width: 200px;
            height: 100%;
            background-color: #333;
            /* padding: 20px 0; */
        }

        .sidebar ul {
            list-style-type: none;
        }
        .sidebar ul li a {
          	text-decoration: none;
          	color: #eee;
            
	          cursor: pointer;
	          letter-spacing: 1px;
            box-sizing: border-box;
        }
        .sidebar ul li a i {
	          display: inline-block;
	          /* padding-right: 10px; */
	          font-size: 30px;
            padding: 10px 20px;
            margin-bottom: 5px;
          
        }
        .sidebar {
	          width: 250px;
          	background: #262931;
	          min-height: 100vh;
	          transition: 500ms;
        }
        .a{
            align-content: right;
        }

        .sidebar ul li:hover {
            background-color: #555;
        }

        .main-content {
            margin-left: 200px;
            padding: 20px;
        }
    </style>
</head>
<body>
    <center>
    <h1 style="background-color: #333; color:white; height: 80px;padding: 10px;;">Admin Dashboard</h1></center><hr>
    <div class="sidebar">
    <ul>
				<li>
					<a href="DBR.php">
						<i  class="fa-solid fa-user" aria-hidden="true"></i>
						<span >Enquiry list</span>
					</a>
				</li>
				<li>
					<a href="staffF.html">
						<i  class="fa-solid fa-user" aria-hidden="true"></i>
						<span>Staff list</span>
					</a>
				</li>
				<li>
					<a href="image.html">
						<i  class="fa-solid fa-user" aria-hidden="true"></i>
						<span>Image Upload</span>
					</a>
				</li>
				
				<li>
					<a href="logout.php">
						<i class="fa-solid fa-user"  aria-hidden="true"></i>
						<span>Logout</span>
					</a>
				</li>
			</ul>
    </div>

    <script>
        document.getElementById('logout').addEventListener('click', function() {
            window.location.href = '/logout';
        });
    </script>
</body>
</html>

<center>
<a href="export.php"> <input type="submit" value="Export" style="color: blue"></a>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "CE";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// The SQL query to select all data from the table
$sql = "SELECT * FROM contacts";
$result = $conn->query($sql);

// The table to display the data
echo "<table border='5'>
<tr>
<th>name</th>
<th>phone</th>
<th>email</yh>
<th>address</th>
<th>services</th>
</tr>";

if ($result->num_rows > 0) {
    // Output each row from the result
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["name"]. "</td>";
        echo "<td>" . $row["phone"]. "</td>";
        echo "<td>" . $row["email"]. "</td>";
        echo "<td>" . $row["address"]. "</td>";
        echo "<td>" . $row["services"]. "</td>";
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